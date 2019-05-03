<?php
  $I = new FunctionalTester($scenario);

  $I->am('admin');
  $I->wantTo('delete a sighting');

  $I->haveRecord('sighting', [
      'id' => '9999',
      'date' => '31/12/9999',
      'time' => '00:00',
      'type' => 'Randomtest',
      'description' => 'Randomtest',
  ]);

  $I->seeRecord('sighting', ['type' => 'Randomtest', 'id' => '9999']);

  $I->amOnPage('/admin/woodlands');

  $I->seeElement('a', ['name' => '9999']);

  $I->click('Delete Randomtest');

  $I->amOnPage('/admin/woodlands');

  $I->dontSeeElement('a', ['name' => '9999']);
