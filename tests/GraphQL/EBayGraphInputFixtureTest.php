<?php

declare(strict_types=1);

namespace EBay\AccountManagement\Tests\GraphQL;

use EBay\AccountManagement\GraphQL\Types\Inputs\UserBiddingActivityInput;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class EBayGraphInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/EBayGraph';

    public static function fixtures(): iterable
    {
        yield 'UserBiddingActivity' => ['UserBiddingActivity', UserBiddingActivityInput::class];
    }

    #[DataProvider('fixtures')]
    public function testFixtureParsing(string $operation, string $class): void
    {
        $data = json_decode(file_get_contents(self::$fixturesDir . '/' . $operation . '.json'), true);

        $result = $class::fromArray($data['input']);

        $this->assertNotNull($result);
    }
}
