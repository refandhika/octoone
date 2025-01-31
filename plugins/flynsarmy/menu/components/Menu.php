<?php

namespace Flynsarmy\Menu\Components;

use Cms\Classes\ComponentBase;
use Flynsarmy\Menu\Models\Menu as MenuModel;

class Menu extends ComponentBase
{
    protected static $storedMenus = [];
    protected $menu;

    public function componentDetails()
    {
        return [
            'name' => 'Menu List',
            'description' => 'Displays a given menu.',
        ];
    }

    public function defineProperties()
    {
        return [
            // Menu selection
            'menu_id' => [
                'title' => 'Menu',
                'type' => 'dropdown',
            ],
        ];
    }

    public function getMenu_idOptions()
    {
        return MenuModel::select('id', 'name')->orderBy('name')->get()->pluck('name', 'id');
    }

    /**
     * Add default render settings to component.
     */
    public function onRender()
    {
        $this->menu = $this->getMenu();
        if (!$this->menu) return '';

        // Grab a list of menu settings
        $settings = $this->menu->getDefaultSettings();

        // Update $settings with any inline paramters they specified on their {% component %}
        foreach ($settings as $key => $setting) {
            $settings[$key] = $this->property($key, $setting);
        }
        $settings['menu'] = $this->menu;
        $settings['selected_item'] = $this->property('selected_item', '');

        return $this->menu->render($this->controller, $settings);
    }

    public function getList()
    {
        $this->menu = $this->getMenu();
        if (!$this->menu) return ['data' => [], 'settings' => []];
        
        // Grab a list of menu settings
        $settings = $this->menu->getDefaultSettings();

        // Update $settings with any inline paramters they specified on their {% component %}
        foreach ($settings as $key => $setting) {
            $settings[$key] = $this->property($key, $setting);
        }

        return [
            'data'      => $this->menu->getList(),
            'settings'  => $settings
        ];
    }

    protected function getMenu()
    {
        $menu_id = $this->property('menu_id', 0);

        if (isset(self::$storedMenus[$menu_id])) {
            return self::$storedMenus[$menu_id];
        }

        return self::$storedMenus[$menu_id] = MenuModel::find($menu_id);
    }
}
