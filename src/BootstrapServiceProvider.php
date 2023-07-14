<?php
namespace CeddyG\Bootstrap;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Description of ServiceProvider
 *
 * @author CeddyG
 */
class BootstrapServiceProvider extends ServiceProvider
{
    protected $components = [
        'accordion'         => \CeddyG\Bootstrap\View\Components\Accordion::class,
        'accordion.item'    => \CeddyG\Bootstrap\View\Components\Accordion\Item::class,

        'breadcrumb'        => \CeddyG\Bootstrap\View\Components\Breadcrumb::class,
        'breadcrumb.item'   => \CeddyG\Bootstrap\View\Components\Breadcrumb\Item::class,

        'card'              => \CeddyG\Bootstrap\View\Components\Card::class,
        'card.body'         => \CeddyG\Bootstrap\View\Components\Card\Body::class,
        'card.footer'       => \CeddyG\Bootstrap\View\Components\Card\Footer::class,
        'card.header'       => \CeddyG\Bootstrap\View\Components\Card\Header::class,

        'carousel'          => \CeddyG\Bootstrap\View\Components\Carousel::class,
        'carousel.item'     => \CeddyG\Bootstrap\View\Components\Carousel\Item::class,

        'droopdown'         => \CeddyG\Bootstrap\View\Components\Dropdown::class,
        'droopdown.divider' => \CeddyG\Bootstrap\View\Components\Dropdown\Divider::class,
        'droopdown.item'    => \CeddyG\Bootstrap\View\Components\Dropdown\Item::class,
        'droopdown.menu'    => \CeddyG\Bootstrap\View\Components\Dropdown\Menu::class,

        'form'              => \CeddyG\Bootstrap\View\Components\Form::class,
        'forms.divider'     => \CeddyG\Bootstrap\View\Components\Forms\Checkbox::class,
        'forms.item'        => \CeddyG\Bootstrap\View\Components\Forms\Date::class,
        'forms.menu'        => \CeddyG\Bootstrap\View\Components\Forms\Email::class,
        'forms.menu'        => \CeddyG\Bootstrap\View\Components\Forms\InputGroupText::class,
        'forms.menu'        => \CeddyG\Bootstrap\View\Components\Forms\Radio::class,
        'forms.menu'        => \CeddyG\Bootstrap\View\Components\Forms\Range::class,
        'forms.menu'        => \CeddyG\Bootstrap\View\Components\Forms\Select::class,
        'forms.menu'        => \CeddyG\Bootstrap\View\Components\Forms\SwitchToggle::class,
        'forms.menu'        => \CeddyG\Bootstrap\View\Components\Forms\Text::class,

        'layout.col'        => \CeddyG\Bootstrap\View\Components\Layout\Col::class,
        'layout.container'  => \CeddyG\Bootstrap\View\Components\Layout\Container::class,
        'layout.row'        => \CeddyG\Bootstrap\View\Components\Layout\Row::class,

        'list-group'        => \CeddyG\Bootstrap\View\Components\ListGroup::class,
        'list-group.item'   => \CeddyG\Bootstrap\View\Components\ListGroup\Item::class,

        'modal'             => \CeddyG\Bootstrap\View\Components\Modal::class,
        'modal.body'        => \CeddyG\Bootstrap\View\Components\Modal\Body::class,
        'modal.footer'      => \CeddyG\Bootstrap\View\Components\Modal\Footer::class,
        'modal.header'      => \CeddyG\Bootstrap\View\Components\Modal\Header::class,

        'nav'               => \CeddyG\Bootstrap\View\Components\Nav::class,
        'nav.item'          => \CeddyG\Bootstrap\View\Components\Nav\Item::class,
        'nav.link'          => \CeddyG\Bootstrap\View\Components\Nav\Link::class,

        'navbar'            => \CeddyG\Bootstrap\View\Components\Navbar::class,

        'pagination'        => \CeddyG\Bootstrap\View\Components\Pagination::class,
        'pagination.item'   => \CeddyG\Bootstrap\View\Components\Pagination\Item::class,

        'progress'          => \CeddyG\Bootstrap\View\Components\Progress::class,
        'progress.stacked'  => \CeddyG\Bootstrap\View\Components\Progress\Stacked::class,

        'toast'             => \CeddyG\Bootstrap\View\Components\Toast::class,
        'toast.body'        => \CeddyG\Bootstrap\View\Components\Toast\Body::class,
        'toast.footer'      => \CeddyG\Bootstrap\View\Components\Toast\Container::class,
        'toast.header'      => \CeddyG\Bootstrap\View\Components\Toast\Header::class,

        'alert'             => \CeddyG\Bootstrap\View\Components\Alert::class,
        'badge'             => \CeddyG\Bootstrap\View\Components\Badge::class,
        'btn-close'         => \CeddyG\Bootstrap\View\Components\BtnClose::class,
        'button-group'      => \CeddyG\Bootstrap\View\Components\ButtonGroup::class,
        'button'            => \CeddyG\Bootstrap\View\Components\Button::class,
        'spinner'           => \CeddyG\Bootstrap\View\Components\Spinner::class,
    ];
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishesConfig();
		$this->publishesView();
    }
    
    /**
	 * Publish config file.
	 * 
	 * @return void
	 */
	private function publishesConfig()
	{
		$this->publishes([__DIR__ . '/../config' => config_path()], 'config');  
	}

	private function publishesView()
	{
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/bootstrap'),
        ], 'views');
        
        Blade::components($this->components, config('bootstrap.prefix'));
        
        $this->loadViewsFrom(__DIR__.'/../resources/views/'.config('bootstrap.version'), 'bs');
	}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/bootstrap.php', 'bootstrap'
        );
    }
}
