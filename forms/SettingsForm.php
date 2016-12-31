<?php
namespace humhub\modules\discordapp\forms;

use Yii;

class SettingsForm extends \yii\base\Model
{

    public $sort;

    public function rules()
    {
        return [
            [
                [

                    'sort'
                ],
                'safe'
            ],
            [
                [

                    'sort'
                ],
                'required'
            ],
            [
                [
                    'sort'
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
            'sort' => Yii::t('DiscordappModule.base', 'sort')
        ];
    }
}
