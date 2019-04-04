<?php

use App\Tests\FunctionalTester;
use Codeception\Util\HttpCode;

$I = new FunctionalTester($scenario);
$I->am('Anonymous');
$I->wantTo('Open secure urls and see login page');

$secureUrls = [
    '/en/admin/post/',
    '/en/admin/post/new',
    '/en/admin/post/1',
    '/en/admin/post/1/edit',
];

foreach ($secureUrls as $url) {
    $I->amOnPage($url);
    $I->seeResponseCodeIs(HttpCode::OK);
    $I->seeCurrentUrlEquals('/en/login');
}
