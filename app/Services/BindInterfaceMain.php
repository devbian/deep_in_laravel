<?php
namespace App\Services;

require __DIR__.'/../../vendor/autoload.php';

use Illuminate\Container\Container;

$container = Container::getInstance();
//$container->bind(MyInterface::class, MyClass::class);
$container->bind(AnotherInterface::class, AnotherClass::class);
//$container->alias(MyInterface::class, 'ab');
// 绑定好了，就可以直接调用了，不用自己一层层的new了，确实方便
//$container->make('ab');
//echo $container->bound(MyInterface::class);
$container->make(AnotherInterface::class);
//$userManager = $container->make(MyInterface::class);
/*
$container->get(MyInterface::class);


$container->instance('database.name', 'innodb');
echo "\n";
echo $container->get('database.name');


$container->bind('ab', 'aaa');
echo "\n";
echo $container->make('ab');
*/