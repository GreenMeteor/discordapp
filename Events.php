<?php

namespace humhub\modules\discordapp;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\modules\ui\menu\MenuLink;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\admin\permissions\ManageModules;

class Events extends BaseObject
{
    /**
     * @param $event yii\base\Event
     */
    public static function onAdminMenuInit($event)
    {
        if (!Yii::$app->user->can(ManageModules::class)) {
            return;
        }

        /** @var AdminMenu $menu */
        $menu = $event->sender;

        $menu->addEntry(new MenuLink([
            'label' => Yii::t('DiscordappModule.base', 'Discord Settings'),
            'url' => Url::toRoute('/discordapp/admin/index'),
            'icon' => '<i class="fab fa-discord"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'discordapp' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650,
            'isVisible' => true,
        ]));
    }

    /**
     * @param $event yii\base\Event
     */
    public static function addDiscordappFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }

        $event->sender->addWidget(widgets\DiscordappFrame::class, [], ['sortOrder' => Yii::$app->getModule('discordapp')->settings->get('sortOrder')]);
    }
}
