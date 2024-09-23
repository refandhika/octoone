<?php namespace Kalfian\ExtendsUser;

use System\Classes\PluginBase;
use Rainlab\User\Controllers\Users as UserController;
use Rainlab\User\Models\User as UserModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot(){
        UserModel::extend(function($model){
            $model->addFillable([
                'jk',
                'tgl_lahir',
                'telp',
                'prof',
                'kota',
                'alamat',
                'source'
            ]);
        });

        UserController::extendFormFields(function($form,$model,$context){
            $form->addTabFields([
                'tgl_lahir' => [
                    'label' => 'Tanggal Lahir',
                    'type' => 'datepicker',
                    'mode' => 'date',
                    'tab' => 'profile',
                ],
                'telp' => [
                    'label' => 'Nomor Telepon',
                    'type' => 'text',
                    'tab' => 'profile',
                ],
                'prof' => [
                    'label' => 'Propinsi',
                    'type' => 'text',
                    'tab' => 'profile',
                ],
                'kota' => [
                    'label' => 'Kota',
                    'type' => 'text',
                    'tab' => 'profile',
                ],
                'alamat' => [
                    'label' => 'Alamat',
                    'type' => 'text',
                    'tab' => 'profile',
                ],
                'source' => [
                    'label' => 'Source',
                    'type' => 'text',
                    'tab' => 'profile',
                ],
            ]);
        });
    }
}
