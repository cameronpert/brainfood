<?php 
$I = new FunctionalTester($scenario);

$I->amOnPage('/');
$I->click('Login');
$I->fillField('Email:', 'cameron.pert@go-software.co.uk');
$I->fillField('Password:', 'bb25thjan!');
$I->click('Log In');

$I->click('Manchester Bombing');
$I->fillField('body', 'terrible');
$I->click('Add Comment');

$I->see('terrible');
