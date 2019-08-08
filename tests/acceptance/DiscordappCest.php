<?php

namespace discordapp\acceptance;

use Codeception\Util\Locator;
use tasks\AcceptanceTester;

class DiscordappCest
{

    public function testInstallAndCreatEntry(AcceptanceTester $I)
    {
        $I->amAdmin();
        $I->wantToTest('the creation of a discordapp sidebar');
        $I->enableModule(1, 'discordapp');
    }
}
