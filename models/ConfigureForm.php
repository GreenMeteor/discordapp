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
    public $sUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'sUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('DiscordappModule.base', 'Discord Widget URL:'),
            'sUrl' => Yii::t('DiscordspaceModule.base', 'Discord Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('DiscordappModule.base', 'e.g. https://discordapp.com/widget?id={server-id} or https://discordapp.com/widget?id={server-id}&theme=dark'),
            'sUrl' => Yii::t('DiscordappModule.base', 'e.g. https://discordapp.com/widget?id={server-id} or https://discordapp.com/widget?id={server-id}&theme=dark'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('discordapp')->settings->get('serverUrl');

        $this->sUrl = Yii::$app->getModule('discordspace')->settings->get('sUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('discordapp')->settings->set('serverUrl', $this->serverUrl);

        Yii::$app->getModule('discordspace')->settings->set('sUrl', $this->sUrl);

        return true;
    }

}
