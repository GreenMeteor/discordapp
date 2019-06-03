<?php

namespace humhub\modules\discordapp;

use Yii;
use yii\helpers\Url;
use humhub\modules\discordapp\widgets\DiscordappFrame;
use yii\base\BaseObject;
use humhub\models\Setting;

class Events extends BaseObject
{

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

    public static function onSpaceAdminMenuInit($event)
    {
        $space = $event->sender->space;
        
        $isSpaceAdmin = version_compare(Yii::$app->version, '1.2.6', 'lt') ? 
                $space->getUserGroup() === \humhub\modules\space\models\Space::USERGROUP_ADMIN || $space->getUserGroup() === \humhub\modules\space\models\Space::USERGROUP_OWNER
                : $space->isAdmin(Yii::$app->user->id);
        if ($isSpaceAdmin) {
            $event->sender->addItem([
                'label' => Yii::t('DiscordappModule.base', 'Discord Settings'),
                'url' => $space->createUrl('/discordapp/space-admin/index'),
                'group' => 'admin',
                'icon' => '<i class="fab fa-discord"></i>',
                'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'discordapp' && Yii::$app->controller->id == 'space-admin'),
                'sortOrder' => 510,
            ]);
        }
    }

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
