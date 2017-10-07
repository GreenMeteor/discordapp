<?php

namespace humhub\modules\discordapp\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.

 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('DiscordappModule.base', 'Discord Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('DiscordappModule.base', 'e.g. https://discordapp.com/widget?id={server-id} or https://discordapp.com/widget?id={server-id}&theme=dark'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('discordapp')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('discordapp')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
