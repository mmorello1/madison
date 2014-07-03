<?php 
$I = new AcceptanceTester($scenario);
$I->haveInDatabase('users', array('email' => 'test@opengovfoundation.org', 
								  'password' => '$2y$10$sESIh1sRtuINotOAPXsjOeVSXQ8wpW/vi4yLnnunKTTrkCfRpIi3W', 
								  'fname' => 'Codeception', 
								  'lname' => 'McIntire', 
								  'token' => '')
                  );
$I->wantTo('check that user can login normally');
$I->amOnPage('/');
$I->amOnPage('/user/login');
$I->fillField('Email', 'test@opengovfoundation.org');
$I->fillField('Password', 'codeception');
$I->click('Login', ['class' => 'btn']);
$I->see('Welcome Codeception');
?>
