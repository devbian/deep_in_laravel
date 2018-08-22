<?php
namespace App\Services;

require __DIR__.'/../vendor/autoload.php';

use Illuminate\Container\Container;

$container = Container::getInstance();
$container->alias('hello', 'apple');
$container->alias('lego', 'apple');
// $container->alias('a', 'a');

// hello->apple->jobs

// $this->aliases['apple'] = 'hello';

/*
function getAlias($abstract)
{
    if (! isset($this->aliases[$abstract])) {
        return $abstract;
    }

    if ($this->aliases[$abstract] === $abstract) {
        throw new LogicException("[{$abstract}] is aliased to itself.");
    }

    return $this->getAlias($this->aliases[$abstract]);
}
*/

// $container->alias('hello', 'b');
echo $container->getAlias('apple') . PHP_EOL;
echo $container->getAlias('google') . PHP_EOL;
echo $container->getAlias('a') . PHP_EOL;


