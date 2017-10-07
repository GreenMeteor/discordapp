<?php

namespace humhub\modules\discordapp\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

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
        $url = Yii::$app->getModule('discordapp')->getServerUrl() . 'https://discordapp.com/widget?id=';

        return $this->render('discordappframe', []);
    }

}
