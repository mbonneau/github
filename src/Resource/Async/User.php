<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Command\User\RepositoriesCommand;
use ApiClients\Client\Github\CommandBus\Command\User\RepositoryCommand;
use ApiClients\Client\Github\CommandBus\Command\User\OrganizationsCommand;
use ApiClients\Client\Github\Resource\User as BaseUser;
use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

class User extends BaseUser
{
    public function refresh() : PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }

    public function repository(string $repository): PromiseInterface
    {
        return $this->handleCommand(
            new RepositoryCommand($this->login(), $repository)
        );
    }

    public function repositories(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new RepositoriesCommand($this->login())
        ));
    }

    public function organizations(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new OrganizationsCommand($this->login())
        ));
    }
}
