<?php

namespace humhub\modules\discordapp;

class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://discordapp.com/widget?id=';
        }

        return $url;
    }

}
