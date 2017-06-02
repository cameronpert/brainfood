<?php 
$I = new FunctionalTester($scenario);

$I->amOnPage('/');
$I->click('Manchester Bombing');
$I->see("That's awful!");
