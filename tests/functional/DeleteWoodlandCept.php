<?php
  $I = new FunctionalTester($scenario);

  $I->am('admin');
  $I->wantTo('delete a woodland');

  $I->haveRecord('woodlands', [
      'id' => '9999',
      'name' => 'Randomtest',
      'longitudeandlatitude' => '999999A999999A',
      'description' => 'Randomtest',
  ]);

  $I->seeRecord('woodlands', ['name' => 'testwoodland', 'id' => '9999']);

  $I->amOnPage('/admin/woodlands');

  $I->see('testwoodland');
  $I->seeElement('testwoodland', 'a.item');

  $I->click('testwoodland delete');

  $I->seeCurrentUrlEquals('admin/woodlands');

  $I->dontSee('testwoodlands');
  $I->dontSeeElement('testwoodlands', 'a.item');
