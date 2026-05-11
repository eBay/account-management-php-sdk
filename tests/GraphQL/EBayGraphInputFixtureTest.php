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
    public function testFromArrayToArrayRoundtrip(string $operation, string $class): void
    {
        // Decode without assoc so {} stays stdClass (not []) — required to distinguish object vs array.
        $cases = json_decode(file_get_contents(self::$fixturesDir . '/' . $operation . '.json'))->cases;

        foreach ($cases as $case) {
            $input    = json_decode(json_encode($case->input), true); // assoc for fromArray
            $instance = $class::fromArray($input);

            // (object) cast mirrors EBayGraphClient which passes (object)$input->toArray() as the variable.
            $this->assertJsonStringEqualsJsonString(
                json_encode($case->expected),
                json_encode((object)$instance->toArray()),
                "Round-trip failed for case: {$case->label}",
            );
        }
    }
}
