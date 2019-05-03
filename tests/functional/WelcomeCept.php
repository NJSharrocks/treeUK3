<?php
$I = new FunctionalTester($scenario);

$I->am('a admin');
$I->wantTo('test Laravel Working');

//when
$I->amOnPage('/');

//then
$I->seeCurrentUrlEquals('/');
$I->See('Laravel 5', '.title');
