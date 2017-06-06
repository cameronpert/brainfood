<?php 
$I = new FunctionalTester($scenario);
        
        $I->amOnPage('/');
        $I->click('Login');
        $I->fillField('Email:', 'cameron.pert@go-software.co.uk');
        $I->fillField('Password:', 'bb25thjan!');
        $I->click('Log In');
        $I->see('Cameron Pert');
        $I->click('Logout');

        $I->amOnPage('/');
        $I->click('Login');
        $I->fillField('Email:', 'erin.lee@go-software.co.uk');
        $I->fillField('Password:', 'freaky1234');
        $I->click('Log In');
        $I->see('Erin Lee');
        $I->click('Logout');

        $I->amOnPage('/');
        $I->click('Login');
        $I->fillField('Email:', 'jack.nicol@go-software.co.uk');
        $I->fillField('Password:', 'freaky1234');
        $I->click('Log In');
        $I->see('Jack Nicol');
        $I->click('Logout');
