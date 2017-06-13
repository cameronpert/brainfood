<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test the login functionality');

$I->amOnPage('/');
$I->click('Login');
$I->fillField('Email:', 'cameron.pert@go-software.co.uk');
$I->fillField('Password:', 'bb25thjan!');
$I->click('Log In');
$I->see('Cameron Pert');