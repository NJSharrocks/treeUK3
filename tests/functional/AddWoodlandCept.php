<?php
  $I = new FunctionalTester($scenario);

  $I->am('admin');
  $I->wantTo('create a new woodland');


  $I->amOnPage('/admin/woodlands');
  $I->see('Woodlands', 'h1');
  $I->dontSee('Randomtest');

  $I->click('Add Woodland');

  $I->amOnPage('/admin/woodlands/create');

  $I->see('Add Woodland', 'h1');
  $I->submitForm('#addWoodland', [
      'name' => 'Randomtest',
  ]);

  $I->seeCurrentUrlEquals('/admin/woodlands');
  $I->see('Woodlands', 'h1');
  $I->see('New woodland added!');
  $I->see('Randomtest');
