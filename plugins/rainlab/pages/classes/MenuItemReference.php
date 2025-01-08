<?php

namespace RainLab\Pages\Classes;

/**
 * Represents a front-end menu item.
 * This class is used on the front-end.
 * In the back-end items are represented with the
 * \RainLab\Pages\Classes\MenuItem objects.
 *
 * @author Alexey Bobkov, Samuel Georges
 */
class MenuItemReference
{
    /**
     * @var string Specifies the item title
     */
    public $title;

    /**
     * @var string Specifies the item URL
     */
    public $url;

    /**
     * @var string specifies the menu item code
     */
    public $code;

    /**
     * @var string indicates whether the item corresponds the currently viewed page
     */
    public $isActive = false;

    /**
     * @var string indicates whether an item subitem corresponds the currently viewed page
     */
    public $isChildActive = false;

    /**
     * @var array Specifies the item subitems
     */
    public $items = [];

    /**
     * @var array specifies the item custom view bag properties
     */
    public $viewBag = [];
}
