<?php

class UserCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function tryUserTest(UnitTester $I)
    {
        $user = new App\User;
        $I->assertSame('User', $user->getFullName());
    }

    public function tryAdminTest(UnitTester $I)
    {
        $user = new App\Models\Admin;
        $I->assertSame('Admin', $user->getFullName());
    }

    public function tryModelTest(UnitTester $I)
    {
        $user = new Model\User;
        $I->assertSame('User not set', $user->getFullName());
    }
}
