<?php

declare(strict_types=1);

namespace EBay\AccountManagement\Tests\GraphQL;

use EBay\AccountManagement\GraphQL\Types\Results\UserBiddingActivityResult;
use EBay\AccountManagement\GraphQL\Types\Results\UserResult;
use PHPUnit\Framework\TestCase;

class EBayGraphFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/output/EBayGraph';

    public static function fixtures(): iterable
    {
        yield 'User'                 => ['User',                 'user',                 UserResult::class];
        yield 'UserBiddingActivity'  => ['UserBiddingActivity',  'userBiddingActivity',  UserBiddingActivityResult::class];
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('fixtures')]
    public function testFixtureParsing(string $operation, string $key, string $class): void
    {
        $data = json_decode(file_get_contents(self::$fixturesDir . '/' . $operation . '.json'), true);

        $result = $class::fromArray($data[$key]);

        $this->assertNotNull($result);
    }
}
