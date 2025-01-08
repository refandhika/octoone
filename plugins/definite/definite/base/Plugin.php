<?php

namespace Definite\Base;

use Backend;
use System\Classes\PluginBase;

/**
 * Base Plugin Information File.
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
            'name' => 'Base',
            'description' => 'No description provided yet...',
            'author' => 'Definite',
            'icon' => 'icon-leaf',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
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
            'Definite\Base\Components\MyComponent' => 'myComponent',
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
            'definite.base.some_permission' => [
                'tab' => 'Base',
                'label' => 'Some permission',
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
            'base' => [
                'label' => 'Base',
                'url' => Backend::url('definite/base/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['definite.base.*'],
                'order' => 500,
            ],
        ];
    }
}
