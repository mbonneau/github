<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\StatusesCommand;
use ApiClients\Client\Github\Resource\Repository\Commit as BaseCommit;
use React\Promise\PromiseInterface;
use Rx\ObservableInterface;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

class Commit extends BaseCommit
{
    public function refresh() : PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }

    public function statuses(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new StatusesCommand($this)
        ));
    }
}
