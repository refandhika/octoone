<?php

namespace Renatio\Logout\Classes;

use Backend\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Schema;
use Renatio\Logout\Models\Settings;

/**
 * Class BackendUserExtension
 * @package Renatio\Logout\Classes
 */
class BackendUserExtension
{

    /**
     * @return void
     */
    public function boot()
    {
        $this->extendModel();

        $this->updateLastActivityAfterLogin();
    }

    /**
     * @return void
     */
    protected function extendModel()
    {
        User::extend(function ($model) {
            $model->addDateAttribute('last_activity');

            $model->addDynamicMethod('isActive', function () use ($model) {
                if (is_null($model->last_activity)) {
                    return false;
                }

                if (!$model->last_activity instanceof Carbon) {
                    $model->last_activity = new Carbon($model->last_activity);
                }

                return Settings::get('lifetime') > time() - $model->last_activity->getTimestamp();
            });

            $model->addDynamicMethod('updateLastActivity', function () use ($model) {
                $model->last_activity = now();
                $model->forceSave();
            });
        });
    }

    /**
     * @return void
     */
    protected function updateLastActivityAfterLogin()
    {
        if ( ! Schema::hasColumn('backend_users', 'last_activity')) {
            return;
        }

        Event::listen('backend.user.login', function ($user) {
            $user->updateLastActivity();
        });
    }

}