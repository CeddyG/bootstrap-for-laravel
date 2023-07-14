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
        'accordion'                 => \CeddyG\Bootstrap\View\Components\Accordion::class,
        'accordion.item'            => \CeddyG\Bootstrap\View\Components\Accordion\Item::class,

        'breadcrumb'                => \CeddyG\Bootstrap\View\Components\Breadcrumb::class,
        'breadcrumb.item'           => \CeddyG\Bootstrap\View\Components\Breadcrumb\Item::class,

        'card'                      => \CeddyG\Bootstrap\View\Components\Card::class,
        'card.body'                 => \CeddyG\Bootstrap\View\Components\Card\Body::class,
        'card.footer'               => \CeddyG\Bootstrap\View\Components\Card\Footer::class,
        'card.header'               => \CeddyG\Bootstrap\View\Components\Card\Header::class,

        'carousel'                  => \CeddyG\Bootstrap\View\Components\Carousel::class,
        'carousel.item'             => \CeddyG\Bootstrap\View\Components\Carousel\Item::class,

        'dropdown'                  => \CeddyG\Bootstrap\View\Components\Dropdown::class,
        'dropdown.divider'          => \CeddyG\Bootstrap\View\Components\Dropdown\Divider::class,
        'dropdown.item'             => \CeddyG\Bootstrap\View\Components\Dropdown\Item::class,
        'dropdown.menu'             => \CeddyG\Bootstrap\View\Components\Dropdown\Menu::class,

        'form'                      => \CeddyG\Bootstrap\View\Components\Form::class,
        'forms.checkbox'            => \CeddyG\Bootstrap\View\Components\Forms\Checkbox::class,
        'forms.date'                => \CeddyG\Bootstrap\View\Components\Forms\Date::class,
        'forms.error'               => \CeddyG\Bootstrap\View\Components\Forms\Error::class,
        'forms.email'               => \CeddyG\Bootstrap\View\Components\Forms\Email::class,
        'forms.input-group-text'    => \CeddyG\Bootstrap\View\Components\Forms\InputGroupText::class,
        'forms.label'               => \CeddyG\Bootstrap\View\Components\Forms\Label::class,
        'forms.radio'               => \CeddyG\Bootstrap\View\Components\Forms\Radio::class,
        'forms.range'               => \CeddyG\Bootstrap\View\Components\Forms\Range::class,
        'forms.select'              => \CeddyG\Bootstrap\View\Components\Forms\Select::class,
        'forms.submit'              => \CeddyG\Bootstrap\View\Components\Forms\Submit::class,
        'forms.switch-toggle'       => \CeddyG\Bootstrap\View\Components\Forms\SwitchToggle::class,
        'forms.text'                => \CeddyG\Bootstrap\View\Components\Forms\Text::class,

        'layout.col'                => \CeddyG\Bootstrap\View\Components\Layout\Col::class,
        'layout.container'          => \CeddyG\Bootstrap\View\Components\Layout\Container::class,
        'layout.row'                => \CeddyG\Bootstrap\View\Components\Layout\Row::class,

        'list-group'                => \CeddyG\Bootstrap\View\Components\ListGroup::class,
        'list-group.item'           => \CeddyG\Bootstrap\View\Components\ListGroup\Item::class,

        'modal'                     => \CeddyG\Bootstrap\View\Components\Modal::class,
        'modal.body'                => \CeddyG\Bootstrap\View\Components\Modal\Body::class,
        'modal.footer'              => \CeddyG\Bootstrap\View\Components\Modal\Footer::class,
        'modal.header'              => \CeddyG\Bootstrap\View\Components\Modal\Header::class,

        'nav'                       => \CeddyG\Bootstrap\View\Components\Nav::class,
        'nav.item'                  => \CeddyG\Bootstrap\View\Components\Nav\Item::class,
        'nav.link'                  => \CeddyG\Bootstrap\View\Components\Nav\Link::class,

        'navbar'                    => \CeddyG\Bootstrap\View\Components\Navbar::class,

        'pagination'                => \CeddyG\Bootstrap\View\Components\Pagination::class,
        'pagination.item'           => \CeddyG\Bootstrap\View\Components\Pagination\Item::class,

        'progress'                  => \CeddyG\Bootstrap\View\Components\Progress::class,
        'progress.stacked'          => \CeddyG\Bootstrap\View\Components\Progress\Stacked::class,

        'toast'                     => \CeddyG\Bootstrap\View\Components\Toast::class,
        'toast.body'                => \CeddyG\Bootstrap\View\Components\Toast\Body::class,
        'toast.container'           => \CeddyG\Bootstrap\View\Components\Toast\Container::class,
        'toast.header'              => \CeddyG\Bootstrap\View\Components\Toast\Header::class,

        'alert'                     => \CeddyG\Bootstrap\View\Components\Alert::class,
        'badge'                     => \CeddyG\Bootstrap\View\Components\Badge::class,
        'btn-close'                 => \CeddyG\Bootstrap\View\Components\BtnClose::class,
        'button-group'              => \CeddyG\Bootstrap\View\Components\ButtonGroup::class,
        'button'                    => \CeddyG\Bootstrap\View\Components\Button::class,
        'spinner'                   => \CeddyG\Bootstrap\View\Components\Spinner::class,
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
