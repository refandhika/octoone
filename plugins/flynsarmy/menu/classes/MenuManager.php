<?php

namespace Flynsarmy\Menu\Classes;

use Str;
use Lang;
use System\Classes\PluginManager;
use System\Classes\SystemException;

/**
 * Widget manager.
 *
 * @author Alexey Bobkov, Samuel Georges
 */
class MenuManager
{
    use \October\Rain\Support\Traits\Singleton;

    /**
     * @var array an array of menu item types
     */
    protected $itemTypes;

    /**
     * @var array cache of report widget registration callbacks
     */
    private $itemTypeCallbacks = [];

    /**
     * @var array an array of report widgets
     */
    protected $itemTypeAliases;

    /**
     * @var array an array where keys are aliases and values are class names
     */
    protected $aliasMap;

    /**
     * @var array an array where keys are class names and values are aliases
     */
    protected $classMap;

    /**
     * Initialize this singleton.
     */
    protected function init()
    {
        $this->pluginManager = PluginManager::instance();
    }

    /**
     * Makes a widget object with configuration set.
     *
     * @param string     $className     a widget class name
     * @param Controller $controller    the Backend controller that spawned this widget
     * @param array      $configuration configuration values
     *
     * @return WidgetBase the widget object
     */
    public function makeWidget($className, $controller = null, $configuration = null)
    {
        /*
         * Build configuration
         */
        if (null === $configuration) {
            $configuration = [];
        }

        /*
         * Create widget object
         */
        if (!class_exists($className)) {
            throw new SystemException(Lang::get('backend::lang.widget.not_registered', [
                'name' => $className,
            ]));
        }

        return new $className($controller, $configuration);
    }

    //
    // Form Widgets
    //

    /**
     * Returns a list of registered form widgets.
     *
     * @return array array keys are class names
     */
    public function listItemTypes()
    {
        if (null === $this->itemTypes) {
            $this->itemTypes = [];

            /*
             * Load module widgets
             */
            foreach ($this->itemTypeCallbacks as $callback) {
                $callback($this);
            }

            /*
             * Load plugin menu item types
             */
            $plugins = $this->pluginManager->getPlugins();

            foreach ($plugins as $plugin) {
                // Plugins doesn't have a register_menu_item_types method
                if (!method_exists($plugin, 'register_flynsarmy_menu_item_types')) {
                    continue;
                }

                // Plugin didn't register any menu item types
                if (!is_array($types = $plugin->register_flynsarmy_menu_item_types())) {
                    continue;
                }

                foreach ($types as $className => $typeInfo) {
                    $this->registerItemType($className, $typeInfo);
                }
            }
        }

        return $this->itemTypes;
    }

    /*
     * Registers a single form form widget.
     */
    public function registerItemType($className, $widgetInfo = null)
    {
        $widgetAlias = isset($widgetInfo['alias']) ? $widgetInfo['alias'] : null;
        if (!$widgetAlias) {
            $widgetAlias = Str::getClassId($className);
        }

        $this->itemTypes[$className] = $widgetInfo;
        $this->itemTypeAliases[$widgetAlias] = $className;
    }

    /**
     * Manually registers form widget for consideration.
     * Usage:
     * <pre>
     *   WidgetManager::registerItemTypes(function($manager){
     *       $manager->registerItemType('Backend\ItemTypes\CodeEditor', 'codeeditor');
     *       $manager->registerItemType('Backend\ItemTypes\RichEditor', 'richeditor');
     *   });
     * </pre>.
     */
    public function registerItemTypes(callable $definitions)
    {
        $this->itemTypeCallbacks[] = $definitions;
    }

    /**
     * Returns a class name from a form widget alias
     * Normalizes a class name or converts an alias to it's class name.
     *
     * @return string the class name resolved, or null
     */
    public function resolveItemType($name)
    {
        if (null === $this->itemTypes) {
            $this->listItemTypes();
        }

        $aliases = $this->itemTypeAliases;

        if (isset($aliases[$name])) {
            return $aliases[$name];
        }

        return null;
    }
}
