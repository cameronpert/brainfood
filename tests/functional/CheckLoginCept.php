<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('visit the create&To-Do List pages while not signed in and check it is blocked by a sign in page');

$I->amOnPage('/');
$I->click('Create');
$I->see('Sign In');

$I->amOnPage('/');
$I->click('To-Do List');
$I->see('Sign In');

