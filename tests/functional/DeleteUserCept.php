<?php
  $I = new FunctionalTester($scenario);

  $I->am('admin');
  $I->wantTo('delete a user');

  $I->haveRecord('users', [
      'id' => '9999',
      'name' => 'testuser',
      'email' => 'test@user.com',
      'password' => 'password',
  ]);

  $I->seeRecord('users', ['name' => 'testuser', 'id' => '9999']);

  $I->amOnPage('/admin/users');

  $I->see('testuser');
  $I->seeElement('testuser', 'a.item');

  $I->click('testuser delete');

  $I->seeCurrentUrlEquals('admin/users');

  $I->dontSee('testuser');
  $I->dontSeeElement('testuser', 'a.item');
