<?php

namespace humhub\modules\discordapp;

return [
    'id' => 'discordapp',
    'class' => 'humhub\modules\discordapp\Module',
    'namespace' => 'humhub\modules\discordapp',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\discordapp\Events',
                'addDiscordappFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\discordapp\Events',
                'addDiscordappFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\discordapp\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
