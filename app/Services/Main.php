<?php
namespace App\Services;

require __DIR__.'/../../vendor/autoload.php';

use Illuminate\Container\Container;

$container = Container::getInstance();
// 就这样的一个make， 就可以轻松实现依赖注入， UserManager有构造函数，但是，不用我们关心，直接用
$userManager = $container->make(UserManager::class);
$userManager->register('dave@davejamesmiller.com', 'MySuperSecurePassword!');

