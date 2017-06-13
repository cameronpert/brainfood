<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('add a task and check it is not visible to other users');

$I->amOnPage('/');
$I->click('To-Do List');

$I->fillField('Email:', 'cameron.pert@go-software.co.uk');
$I->fillField('Password:', 'bb25thjan!');
$I->click('Log In');

$I->click('To-Do List');
$I->fillField('title', 'TestTaskCameron');
$I->click('Add Task');

$I->see('TestTaskCameron');

$I->click('Logout');
$I->click('Login');

$I->fillField('Email:', 'erin.lee@go-software.co.uk');
$I->fillField('Password:', 'freaky1234');
$I->click('Log In');

$I->click('To-Do List');

$I->dontSee('TestTaskCameron');