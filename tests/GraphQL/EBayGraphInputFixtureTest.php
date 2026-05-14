<?php

declare(strict_types=1);

namespace EBay\AccountManagement\Tests\GraphQL;

use EBay\AccountManagement\GraphQL\Types\AddToWatchList\Input\AddToWatchListInput;
use EBay\AccountManagement\GraphQL\Types\CreateOrReplaceUserNote\Input\CreateOrReplaceUserNoteInput;
use EBay\AccountManagement\GraphQL\Types\DeleteUserNote\Input\DeleteUserNoteInput;
use EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Input\ItemBiddingActivityInput;
use EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Input\RemoveFromWatchListInput;
use EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Input\UserBiddingActivityInput;
use EBay\AccountManagement\GraphQL\Types\UserCustomLists\Input\UserCustomListsInput;
use EBay\AccountManagement\GraphQL\Types\UserWatchList\Input\UserWatchListInput;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class EBayGraphInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input';

    public static function fixtures(): iterable
    {
        yield 'AddToWatchList'           => ['addToWatchList',           AddToWatchListInput::class,           'input'];
        yield 'CreateOrReplaceUserNote'  => ['createOrReplaceUserNote',  CreateOrReplaceUserNoteInput::class,  'input'];
        yield 'DeleteUserNote'           => ['deleteUserNote',           DeleteUserNoteInput::class,           'input'];
        yield 'RemoveFromWatchList'      => ['removeFromWatchList',      RemoveFromWatchListInput::class,      'input'];
        yield 'UserBiddingActivity'      => ['userBiddingActivity',      UserBiddingActivityInput::class,      'input'];
        yield 'UserCustomLists'          => ['userCustomLists',          UserCustomListsInput::class,          'input'];
        yield 'UserWatchList'            => ['userWatchList',            UserWatchListInput::class,            'input'];
    }

    #[DataProvider('fixtures')]
    public function testFromArrayDoesNotThrow(string $operation, string $class, string $key): void
    {
        $fixture = json_decode(file_get_contents(self::$fixturesDir . '/' . $operation . '.json'), true);
        $inputData = $fixture[$key] ?? [];

        $instance = $class::fromArray($inputData);

        $this->assertNotNull($instance);
    }

    public function testItemBiddingActivityFromArray(): void
    {
        $fixture = json_decode(file_get_contents(self::$fixturesDir . '/itemBiddingActivity.json'), true);

        $instance = ItemBiddingActivityInput::fromArray($fixture);

        $this->assertNotNull($instance);
        $this->assertSame('mock-id', $instance->itemId);
    }
}
