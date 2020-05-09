<?php

namespace humhub\modules\discordapp\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'required'],
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
            'serverUrl' => Yii::t('DiscordappModule.base', 'e.g. https://discordapp.com/widget?id={server-id} or https://discord.com/widget?id={server-id}'),
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
