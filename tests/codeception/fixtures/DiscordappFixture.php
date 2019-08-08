<?php

namespace humhub\modules\discordapp\tests\codeception\fixtures;

use humhub\modules\discordapp\models\ConfigureForm;
use yii\test\ActiveFixture;

class TaskFixture extends ActiveFixture
{
    public $modelClass = Task::class;
    public $dataFile = '@discordapp/tests/codeception/fixtures/data/task.php';
    
     public $depends = [
        DiscordappItemFixture::class,
        DiscordappSettingFixture::class,
        DiscordappReminderFixture::class,
        DiscordappUserFixture::class,
    ];
}
