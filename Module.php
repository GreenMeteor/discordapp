<?php

namespace humhub\modules\discordapp;

use Yii;
use yii\helpers\Url;
use humhub\components\Module as BaseModule;

class Module extends BaseModule
{

    public $resourcesPath = 'resources';

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/discordapp/admin']);
    }

    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://discordapp.com' || 'https://discord.com';
        }
        return $url;
    }

    public function getOrder()
    {
        $sortOrder = $this->settings->get('sortOrder');
        if (empty($sortOrder)) {
            return '100';
        }
        return $sortOrder;
    }
}
