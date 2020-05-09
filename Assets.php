<?php

namespace humhub\modules\discordapp;

use Yii;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/resources';
        parent::init();
    }
}
