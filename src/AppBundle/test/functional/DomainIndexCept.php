<?php
$I = new AcmeBundle\FunctionalTester($scenario);
$I->wantTo('test domain route');

$I->amOnPage('http://example.com/en/domain');
$I->see('DOMAIN example.com');
