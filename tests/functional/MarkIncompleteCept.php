<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('mark a completed task incomplete');

$I->amOnPage('/');
$I->click('To-Do List');

$I->fillField('Email:', 'cameron.pert@go-software.co.uk');
$I->fillField('Password:', 'bb25thjan!');
$I->click('Log In');

$I->click('To-Do List');
$I->click('Edit');
$I->click('Mark Complete');

$I->seeInSource('<strike>delete comment function</strike>');

$I->click('Edit');
$I->click('Mark Incomplete');

$I->dontSeeInSource('<strike>delete comment function</strike>');