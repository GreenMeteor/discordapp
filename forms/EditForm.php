<?php

namespace humhub\modules\discordapp\forms;

use Yii;

class EditForm extends \yii\base\Model
{

    public $sort;

    public function rules()
    {
        return [
            [
                [

                    'discord-id'
                ],
                'safe'
            ],
            [
                [

                    'discord-id'
                ],
                'required'
            ],
            [
                [
                    'discord-id'
                ],
                'integer',
                'min' => 0,
                'max' => '2000'
            ]
        ];
    }

    public function attributeLabels()
    {
        return [
            'sort' => Yii::t('DiscordappModule.base', 'Discord ID')
        ];
    }
}
