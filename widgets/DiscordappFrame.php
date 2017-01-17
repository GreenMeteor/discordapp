<?php

namespace humhub\modules\discordapp\widgets;

use humhub\models\Setting;;
use humhub\components\Widget;

class Discordapp extends \humhub\components\Widget
{

    public $contentContainer;

    public function run()
    {
        return $this->render('discordappframe', []);
    }
}
