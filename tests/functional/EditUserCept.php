<?php
$I = new FunctionalTester($scenario);

$I->am('admin');
$I->wantTo('update a user');

$I->haveRecord('users', [
  'id' => '9999',
  'name' => 'testuser',
  'email' => 'test@user.com',
  'password' => 'password',
]);

$I->seeRecord('users', ['name' => 'testuser', 'id' => '9999']);

$I->amOnPage('/admin/users');

$I->seeElement('a', ['name' => '9999']);

$I->click('a', ['name' => '9999']);

$I->amOnPage('/admin/users/9999/edit');

$I->see('Edit User - testuser', 'h1');

$I->amGoingTo('Clear the name field in order to try and submit an invalid entry');

$I->fillField('name', null);

$I->click('Update User');

$I->expectTo('See the form again with errors identified');
$I->seeCurrentUrlEquals('/admin/users/9999/edit');
$I->see('the name filed is required');

$I->fillField('name', 'updateduser');

$I->click('Update User');

$I->seeCurrentUrlEquals('admin/users');
$I->seeRecord('users', ['name' => 'updateduser']);
$I->see('Users', 'h1');
$I->see('updateduser');
