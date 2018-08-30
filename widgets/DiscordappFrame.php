<?php

namespace humhub\modules\discordapp\widgets;

use Yii;
use yii\base\Widget;

/**
 *
 * @author Felli
 */
class DiscordappFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('discordapp')->getServerUrl() . '/widget?id=';
        return $this->render('discordappframe', ['discordappUrl' => $url]);
    }
}
