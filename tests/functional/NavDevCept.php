<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('check the correct options are in the nav bar');

$I->amOnPage('/');
$I->see('Home');
$I->see('Authors');
$I->see('Create');
$I->see('About Us');
$I->see('To-Do List');
