<?php

namespace RainLab\Pages;

use Event;
use Backend;
use RainLab\Pages\Classes\Controller;
use RainLab\Pages\Classes\Page as StaticPage;
use RainLab\Pages\Classes\Router;
use RainLab\Pages\Classes\Snippet;
use RainLab\Pages\Classes\SnippetManager;
use Cms\Classes\Theme;
use Cms\Classes\Controller as CmsController;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'rainlab.pages::lang.plugin.name',
            'description' => 'rainlab.pages::lang.plugin.description',
            'author' => 'Alexey Bobkov, Samuel Georges',
            'icon' => 'icon-files-o',
            'homepage' => 'https://github.com/rainlab/pages-plugin',
        ];
    }

    public function registerComponents()
    {
        return [
            '\RainLab\Pages\Components\StaticPage' => 'staticPage',
            '\RainLab\Pages\Components\StaticMenu' => 'staticMenu',
            '\RainLab\Pages\Components\StaticBreadcrumbs' => 'staticBreadcrumbs',
        ];
    }

    public function registerPermissions()
    {
        return [
            'rainlab.pages.manage_pages' => [
                'tab' => 'rainlab.pages::lang.page.tab',
                'order' => 200,
                'label' => 'rainlab.pages::lang.page.manage_pages',
            ],
            'rainlab.pages.manage_menus' => [
                'tab' => 'rainlab.pages::lang.page.tab',
                'order' => 200,
                'label' => 'rainlab.pages::lang.page.manage_menus',
                ],
            'rainlab.pages.manage_content' => [
                'tab' => 'rainlab.pages::lang.page.tab',
                'order' => 200,
                'label' => 'rainlab.pages::lang.page.manage_content',
            ],
            'rainlab.pages.access_snippets' => [
                'tab' => 'rainlab.pages::lang.page.tab',
                'order' => 200,
                'label' => 'rainlab.pages::lang.page.access_snippets',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'pages' => [
                'label' => 'rainlab.pages::lang.plugin.name',
                'url' => Backend::url('rainlab/pages'),
                'icon' => 'icon-files-o',
                'iconSvg' => 'plugins/rainlab/pages/assets/images/pages-icon.svg',
                'permissions' => ['rainlab.pages.*'],
                'order' => 200,

                'sideMenu' => [
                    'pages' => [
                        'label' => 'rainlab.pages::lang.page.menu_label',
                        'icon' => 'icon-files-o',
                        'url' => 'javascript:;',
                        'attributes' => ['data-menu-item' => 'pages'],
                        'permissions' => ['rainlab.pages.manage_pages'],
                    ],
                    'menus' => [
                        'label' => 'rainlab.pages::lang.menu.menu_label',
                        'icon' => 'icon-sitemap',
                        'url' => 'javascript:;',
                        'attributes' => ['data-menu-item' => 'menus'],
                        'permissions' => ['rainlab.pages.manage_menus'],
                    ],
                    'content' => [
                        'label' => 'rainlab.pages::lang.content.menu_label',
                        'icon' => 'icon-file-text-o',
                        'url' => 'javascript:;',
                        'attributes' => ['data-menu-item' => 'content'],
                        'permissions' => ['rainlab.pages.manage_content'],
                    ],
                    'snippets' => [
                        'label' => 'rainlab.pages::lang.snippet.menu_label',
                        'icon' => 'icon-newspaper-o',
                        'url' => 'javascript:;',
                        'attributes' => ['data-menu-item' => 'snippet'],
                        'permissions' => ['rainlab.pages.access_snippets'],
                    ],
                ],
            ],
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'RainLab\Pages\FormWidgets\PagePicker' => 'staticpagepicker',
        ];
    }

    public function boot()
    {
        Event::listen('cms.router.beforeRoute', function ($url) {
            return Controller::instance()->initCmsPage($url);
        });

        Event::listen('cms.page.beforeRenderPage', function ($controller, $page) {
            /*
             * Before twig renders
             */
            $twig = $controller->getTwig();
            $loader = $controller->getLoader();
            Controller::instance()->injectPageTwig($page, $loader, $twig);

            /*
             * Get rendered content
             */
            $contents = Controller::instance()->getPageContents($page);
            if (strlen($contents)) {
                return $contents;
            }
        });

        Event::listen('cms.page.initComponents', function ($controller, $page) {
            Controller::instance()->initPageComponents($controller, $page);
        });

        Event::listen('cms.block.render', function ($blockName, $blockContents) {
            $page = CmsController::getController()->getPage();

            if (!isset($page->apiBag['staticPage'])) {
                return;
            }

            $contents = Controller::instance()->getPlaceholderContents($page, $blockName, $blockContents);
            if (strlen($contents)) {
                return $contents;
            }
        });

        Event::listen('pages.menuitem.listTypes', function () {
            return [
                'static-page' => 'rainlab.pages::lang.menuitem.static_page',
                'all-static-pages' => 'rainlab.pages::lang.menuitem.all_static_pages',
            ];
        });

        Event::listen('pages.menuitem.getTypeInfo', function ($type) {
            if ('url' == $type) {
                return [];
            }

            if ('static-page' == $type || 'all-static-pages' == $type) {
                return StaticPage::getMenuTypeInfo($type);
            }
        });

        Event::listen('pages.menuitem.resolveItem', function ($type, $item, $url, $theme) {
            if ('static-page' == $type || 'all-static-pages' == $type) {
                return StaticPage::resolveMenuItem($item, $url, $theme);
            }
        });

        Event::listen('backend.form.extendFieldsBefore', function ($formWidget) {
            if ($formWidget->model instanceof \Cms\Classes\Partial) {
                Snippet::extendPartialForm($formWidget);
            }
        });

        Event::listen('cms.template.save', function ($controller, $template, $type) {
            Plugin::clearCache();
        });

        Event::listen('cms.template.processSettingsBeforeSave', function ($controller, $dataHolder) {
            $dataHolder->settings = Snippet::processTemplateSettingsArray($dataHolder->settings);
        });

        Event::listen('cms.template.processSettingsAfterLoad', function ($controller, $template) {
            Snippet::processTemplateSettings($template);
        });

        Event::listen('cms.template.processTwigContent', function ($template, $dataHolder) {
            if ($template instanceof \Cms\Classes\Layout) {
                $dataHolder->content = Controller::instance()->parseSyntaxFields($dataHolder->content);
            }
        });

        Event::listen('backend.richeditor.listTypes', function () {
            return [
                'static-page' => 'rainlab.pages::lang.menuitem.static_page',
            ];
        });

        Event::listen('backend.richeditor.getTypeInfo', function ($type) {
            if ('static-page' === $type) {
                return StaticPage::getRichEditorTypeInfo($type);
            }
        });
    }

    /**
     * Register new Twig variables.
     *
     * @return array
     */
    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'staticPage' => ['RainLab\Pages\Classes\Page', 'url'],
                'convertAMPImg' => function ($image) {
                    return $this->convertAMPImg($image);
                }
            ],
        ];
    }

    private function convertAMPImg($image)
    {
        preg_match_all("#<img(.*?)\\/?>#", $image, $matches);

        foreach ($matches[1] as $key => $m) {
            preg_match_all('/(alt|src|width|height)=("[^"]*")/i', $m, $matches2);
            $amp_tag = '<amp-img ';

            foreach ($matches2[1] as $key2 => $val) {
                $amp_tag .= $val .'='. $matches2[2][$key2] .' ';
            }

            // $amp_tag .= 'srcset="'.$matches2[2][0].'640w, '.$matches2[2][0].' 320w"';
            $amp_tag .= 'layout="responsive" width="300px" height="120px"';
            $amp_tag .= '>';
            $amp_tag .= '</amp-img>';
            $image = str_replace($matches[0][$key], $amp_tag, $image);
        }

        return $image;
    }

    public static function clearCache()
    {
        $theme = Theme::getEditTheme();

        $router = new Router($theme);
        $router->clearCache();

        StaticPage::clearMenuCache($theme);
        SnippetManager::clearCache($theme);
    }
}
