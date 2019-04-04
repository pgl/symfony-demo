<?php
use App\Tests\FunctionalTester;
use Codeception\Util\HttpCode;

$I = new FunctionalTester($scenario);
$I->am('Anonymous');
$I->wantTo('Open public urls and see requested page');

$publicUrls = [
    '/',
    '/en/blog/',
    '/en/login',
];

foreach ($publicUrls as $url) {
    $I->amOnPage($url);
    $I->seeResponseCodeIs(HttpCode::OK);
    $I->seeCurrentUrlEquals($url);
}
