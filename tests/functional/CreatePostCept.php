<?php 
$I = new FunctionalTester($scenario);

$I->amOnPage('/');
$I->click('Login');
$I->fillField('Email:', 'cameron.pert@go-software.co.uk');
$I->fillField('Password:', 'bb25thjan!');
$I->click('Log In');

$I->amOnPage('/posts/create');
$I->fillField('Title:', 'cxoxoxoxo');
$I->fillField('Body:', 'hghbwytgtytqcgwygwryicrtriubcxiungt4qx4yzgnfy3zyougnvnxvxvzxvtgnt6');
$I->click('Publish');
$I->see('cxoxoxoxo');

