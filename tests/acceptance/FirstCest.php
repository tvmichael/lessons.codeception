<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
//    public function tryToTest(AcceptanceTester $I)
//    {
//        $I->amOnPage('/');
//        $I->waitForElement('#w0', 3);
//        $I->seeElement('.jumbotron');
//        $I->wait(1);
//        $I->see('About', ['css' => 'body a']);
//        $I->click("a[href='/site/about']");
//        $I->wait(3);
//        $I->see('This is the About page.');
//        $I->wait(1);
//        $I->click(['link' => 'Home']);
//        $I->wait(1);
//        $I->see('Congratulations');
//        $I->wait(1);
//        $I->click(['link' => 'Contact']);
//        $I->see('If you have business inquiries or other questions');
//
//        $I->appendField('#contactform-name', 'SelectValue');
//        $I->wait(1);
//        $I->appendField('#contactform-email', 'select.value@mail.ua');
//        $I->wait(1);
//        $I->appendField('#contactform-subject', 'Select-Value');
//    }

    public function tryToSite(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->waitForElement('#allrecords', 3);
        $I->seeElement('.wrapper-container');
        $I->wait(1);
        $I->see('Отправить заявку', ['css' => 'a.order-button-top']);
//        $I->click("a[href='/site/about']");
//        $I->wait(3);
//        $I->see('This is the About page.');
//        $I->wait(1);
//        $I->click(['link' => 'Home']);
//        $I->wait(1);
//        $I->see('Congratulations');
//        $I->wait(1);
//        $I->click(['link' => 'Contact']);
//        $I->see('If you have business inquiries or other questions');
//
        $I->appendField(".t-input-block>input[name=name]", 'SelectName');
        $I->wait(5);
        $I->appendField(".t-input-block>input[name=email]", 'select.value@mail.ua');
        $I->wait(5);
//        $I->appendField('#contactform-subject', 'Select-Value');
    }
}
