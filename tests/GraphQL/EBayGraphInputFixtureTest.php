<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

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
