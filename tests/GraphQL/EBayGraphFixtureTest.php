<?php

declare(strict_types=1);

namespace EBay\AccountManagement\Tests\GraphQL;

use EBay\AccountManagement\GraphQL\Types\AddToWatchList\Output\AddToWatchListOutput;
use EBay\AccountManagement\GraphQL\Types\CreateOrReplaceUserNote\Output\CreateOrReplaceUserNoteOutput;
use EBay\AccountManagement\GraphQL\Types\DeleteUserNote\Output\DeleteUserNoteOutput;
use EBay\AccountManagement\GraphQL\Types\ItemBiddingActivity\Output\ItemBiddingActivityOutput;
use EBay\AccountManagement\GraphQL\Types\RemoveAllFromWatchList\Output\RemoveAllFromWatchListOutput;
use EBay\AccountManagement\GraphQL\Types\RemoveFromWatchList\Output\RemoveFromWatchListOutput;
use EBay\AccountManagement\GraphQL\Types\User\Output\UserOutput;
use EBay\AccountManagement\GraphQL\Types\UserBiddingActivity\Output\UserBiddingActivityOutput;
use EBay\AccountManagement\GraphQL\Types\UserCustomLists\Output\UserCustomListsOutput;
use EBay\AccountManagement\GraphQL\Types\UserWatchList\Output\UserWatchListOutput;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class EBayGraphFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/output';

    public static function fixtures(): iterable
    {
        // Simple object operations — single JSON file
        yield 'User'                => ['user',                'user',                UserOutput::class,                'user.json'];
        yield 'UserBiddingActivity' => ['userBiddingActivity', 'userBiddingActivity', UserBiddingActivityOutput::class, 'userBiddingActivity.json'];
        yield 'ItemBiddingActivity' => ['itemBiddingActivity', 'itemBiddingActivity', ItemBiddingActivityOutput::class, 'itemBiddingActivity.json'];
        yield 'UserWatchList'       => ['userWatchList',       'userWatchList',       UserWatchListOutput::class,       'userWatchList.json'];

        // Union operations — one file per variant in a directory
        yield 'AddToWatchListFailure'               => ['addToWatchList',       'addToWatchList',       AddToWatchListOutput::class,             'addToWatchList/AddToWatchListFailure.json'];
        yield 'AddToWatchListPartialFailure'         => ['addToWatchList',       'addToWatchList',       AddToWatchListOutput::class,             'addToWatchList/AddToWatchListPartialFailure.json'];
        yield 'AddToWatchListSuccess'               => ['addToWatchList',       'addToWatchList',       AddToWatchListOutput::class,             'addToWatchList/AddToWatchListSuccess.json'];
        yield 'RemoveFromWatchListFailure'          => ['removeFromWatchList',  'removeFromWatchList',  RemoveFromWatchListOutput::class,        'removeFromWatchList/RemoveFromWatchListFailure.json'];
        yield 'RemoveFromWatchListPartialFailure'    => ['removeFromWatchList',  'removeFromWatchList',  RemoveFromWatchListOutput::class,        'removeFromWatchList/RemoveFromWatchListPartialFailure.json'];
        yield 'RemoveFromWatchListSuccess'          => ['removeFromWatchList',  'removeFromWatchList',  RemoveFromWatchListOutput::class,        'removeFromWatchList/RemoveFromWatchListSuccess.json'];
        yield 'RemoveAllFromWatchListSuccess'       => ['removeAllFromWatchList', 'removeAllFromWatchList', RemoveAllFromWatchListOutput::class,  'removeAllFromWatchList/RemoveAllFromWatchListSuccess.json'];
        yield 'CreateOrReplaceUserNoteSuccess'      => ['createOrReplaceUserNote', 'createOrReplaceUserNote', CreateOrReplaceUserNoteOutput::class, 'createOrReplaceUserNote/CreateOrReplaceUserNoteSuccess.json'];
        yield 'CreateOrReplaceUserNoteNotFound'     => ['createOrReplaceUserNote', 'createOrReplaceUserNote', CreateOrReplaceUserNoteOutput::class, 'createOrReplaceUserNote/ReferenceArgumentsNotFound.json'];
        yield 'DeleteUserNoteSuccess'               => ['deleteUserNote',       'deleteUserNote',       DeleteUserNoteOutput::class,             'deleteUserNote/DeleteUserNoteSuccess.json'];
        yield 'DeleteUserNoteNotFound'              => ['deleteUserNote',       'deleteUserNote',       DeleteUserNoteOutput::class,             'deleteUserNote/ReferenceArgumentsNotFound.json'];
        yield 'UserCustomListsFailure'              => ['userCustomLists',      'userCustomLists',      UserCustomListsOutput::class,            'userCustomLists/UserCustomListsFailure.json'];
        yield 'UserCustomListsPartialFailure'        => ['userCustomLists',      'userCustomLists',      UserCustomListsOutput::class,            'userCustomLists/UserCustomListsPartialFailure.json'];
        yield 'UserCustomListsSuccess'              => ['userCustomLists',      'userCustomLists',      UserCustomListsOutput::class,            'userCustomLists/UserCustomListsSuccess.json'];
    }

    #[DataProvider('fixtures')]
    public function testFixtureParsing(string $operation, string $key, string $class, string $fixtureRelPath): void
    {
        $data = json_decode(file_get_contents(self::$fixturesDir . '/' . $fixtureRelPath), true);

        $result = $class::fromArray($data[$key]);

        $this->assertNotNull($result);
    }
}
