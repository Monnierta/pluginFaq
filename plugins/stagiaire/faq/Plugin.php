<?php namespace Stagiaire\Faq;

use Backend;
use System\Classes\PluginBase;

/**
 * faq Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'faq',
            'description' => 'No description provided yet...',
            'author'      => 'stagiaire',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Stagiaire\Faq\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'stagiaire.faq.some_permission' => [
                'tab' => 'faq',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'faq' => [
                'label'       => 'faq',
                'url'         => Backend::url('stagiaire/faq/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['stagiaire.faq.*'],
                'order'       => 500,
            ],
        ];
    }
}
