<?php

namespace RainLab\Location\FormWidgets;

use Html;
use Backend\Classes\FormWidgetBase;
use RainLab\Location\Models\Setting;

/**
 * Address finder
 * Renders a Google Place address field.
 *
 * Usage:
 *
 *   address:
 *       label: Address
 *       type: addressfinder
 *       countryRestriction: 'us,ch'
 *       fieldMap:
 *           latitude: latitude
 *           longitude: longitude
 *           city: city
 *           zip: zip
 *
 * @author Alexey Bobkov, Samuel Georges
 */
class AddressFinder extends FormWidgetBase
{
    /**
     * {@inheritdoc}
     */
    public $defaultAlias = 'addressfinder';

    protected $fieldMap;
    protected $countryRestriction;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->fieldMap = $this->getConfig('fieldMap', []);
        $this->countryRestriction = $this->getConfig('countryRestriction', '');
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('addressfinder');
    }

    /**
     * Prepares the list data.
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['field'] = $this->formField;
    }

    public function getFieldMapAttributes()
    {
        $widget = $this->controller->formGetWidget();
        $fields = $widget->getFields();
        $result = [];

        foreach ($this->fieldMap as $map => $fieldName) {
            if (!$field = array_get($fields, $fieldName)) {
                continue;
            }

            $result['data-input-'.$map] = '#'.$field->getId();
        }

        return Html::attributes($result);
    }

    public function getCountryRestriction()
    {
        return $this->countryRestriction;
    }

    /**
     * {@inheritdoc}
     */
    public function loadAssets()
    {
        $apiKey = Setting::get('google_maps_key');
        $this->addJs('//maps.googleapis.com/maps/api/js?libraries=places&key='.$apiKey);
        $this->addJs('js/location-autocomplete.js', 'core');
    }
}
