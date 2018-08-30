<?php

namespace humhub\modules\discordapp;

use Yii;
use yii\helpers\Url;
use humhub\components\Module;

class Module extends Module
{

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
                    '/discordapp/admin'
        ]);
    }
    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://discordapp.com';
        }
        return $url;
    }

}
