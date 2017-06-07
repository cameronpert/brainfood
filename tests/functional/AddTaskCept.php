<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('add a task and check it is there');

$I->amOnPage('/');
$I->click('To-Do List');

$I->fillField('Email:', 'cameron.pert@go-software.co.uk');
$I->fillField('Password:', 'bb25thjan!');
$I->click('Log In');

$I->click('To-Do List');
$I->fillField('title', 'TestTask');
$I->click('Add Task');

$I->see('TestTask');