<?php

namespace humhub\modules\discordapp;

use humhub\modules\discordapp\Module;
use humhub\modules\discordapp\Events;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\space\widgets\Sidebar as Space;
use humhub\modules\dashboard\widgets\Sidebar as Dashboard;
return [
    'id' => 'discordapp',
    'class' => Module::class,
    'namespace' => 'humhub\modules\discordapp',
    'events' => [
        ['class' => Dashboard::class, 'event' => Dashboard::EVENT_INIT, 'callback' => [Events::class, 'addDiscordappFrame']],
        ['class' => Space::class, 'event' => Space::EVENT_INIT, 'callback' => [Events::class, 'addDiscordappFrame']],
        ['class' => AdminMenu::class, 'event' => AdminMenu::EVENT_INIT, 'callback' => [Events::class, 'onAdminMenuInit']]
    ]
];
?>
