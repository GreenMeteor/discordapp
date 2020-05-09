<?php

namespace humhub\modules\discordapp;

use Yii;
use yii\helpers\Url;
use humhub\modules\discordapp\widgets\DiscordappFrame;
use yii\base\BaseObject;
use humhub\models\Setting;

class Events extends BaseObject
{
    /**
     * @param $event yii\base\Event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => Yii::t('DiscordappModule.base', 'Discord Settings'),
            'url' => Url::toRoute('/discordapp/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fab fa-discord"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'discordapp' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

    /**
     * @param $event yii\base\Event
     */
    public static function addDiscordappFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(DiscordappFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'discordapp')
        ]);
    }
}
