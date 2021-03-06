<?php

use ApiClients\Client\Github\Authentication\Anonymous;
use ApiClients\Client\Github\Authentication\Token;

$keyFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'token.php';

function display_throwable(Throwable $throwable)
{
    echo 'Class: ', get_class($throwable), PHP_EOL;
    echo 'Code: ', $throwable->getCode(), PHP_EOL;
    echo 'Message: ', $throwable->getMessage(), PHP_EOL;
    echo '-------------------------------', PHP_EOL;
    echo (string) $throwable, PHP_EOL;
}

//return new Anonymous();

if (!file_exists($keyFile)) {
    echo 'No key file find, copy token.sample.php to token.php and add a token from https://github.com/settings/tokens to run examples.', PHP_EOL;
    echo 'We\'ll make Anonymous calls to Github, add a token to token.sample.php to authenticated requests.', PHP_EOL;
    echo '-----------------------------------------------------------------------------------------------------------------------------', PHP_EOL;
    return new Anonymous();
}

return new Token(require $keyFile);
