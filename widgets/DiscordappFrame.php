<?php
namespace humhub\modules\discordapp\widgets;

use humhub\components\Widget;

class DiscordappFrame extends Widget
{

    public $contentContainer;

    public function run()
    {
        return $this->render('discordappframe', []);
    }
}
