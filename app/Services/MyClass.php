<?php
namespace App\Services;

class MyClass implements MyInterface
{
    private $dependency;

    public function __construct(AnotherInterface $dependency)
    {
        echo 'In MyClass Construct. It need AnotherInterface ' . PHP_EOL;

        $this->dependency = $dependency;
    }

    public function me()
    {
        echo " Me";
    }
}