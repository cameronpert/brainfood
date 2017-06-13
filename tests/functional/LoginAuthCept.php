<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('visit the create,To-Do List and comment pages while not signed in and check it is blocked by a sign in page');

$I->amOnPage('/');
$I->click('Create');
$I->see('Sign In');

$I->amOnPage('/');
$I->click('To-Do List');
$I->see('Sign In');

$I->amOnPage('/');
$I->click('Manchester Bombing');
$I->see('Please Log In to leave a comment.');
