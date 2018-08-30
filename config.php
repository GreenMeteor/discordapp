<?php

namespace humhub\modules\discordapp;

return [
    'id' => 'discordapp',
    'class' => 'humhub\modules\discordapp\Module',
    'namespace' => 'humhub\modules\discordapp',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\discordapp\Events',
                'addDiscordappFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\discordapp\Events',
                'addDiscordappFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\discordapp\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
