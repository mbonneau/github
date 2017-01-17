<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Contents;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\Github\Resource\Sync\Contents\EmptyFile;

final class EmptyFileTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return EmptyFile::class;
    }
}