<?php
namespace humhub\modules\discordapp;

use Yii;
use yii\helpers\Url;
use humhub\modules\discordapp\widgets\AdFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('DiscordappModule.base', 'Discordapp Settings'),
            'url' => Url::toRoute('/discordapp/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-discord"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'discordapp' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addChatFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(ChatFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'discordapp')
        ]);
    }
}
