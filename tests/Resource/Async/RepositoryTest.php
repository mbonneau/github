<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\Resource\Async;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository;

class RepositoryTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return Repository::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}