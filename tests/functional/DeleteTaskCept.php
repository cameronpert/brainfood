<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('add a task and delete, checking it is not there');

$I->amOnPage('/');
$I->click('To-Do List');

$I->fillField('Email:', 'cameron.pert@go-software.co.uk');
$I->fillField('Password:', 'bb25thjan!');
$I->click('Log In');

$I->click('To-Do List');

$I->see('delete comment function');
$I->click('Edit');

$I->click('Delete');

$I->dontSee('delete comment function');
