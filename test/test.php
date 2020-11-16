<?php

use soonio\utils\Configure;

include __DIR__ . '/../vendor/autoload.php';

class A
{
    use Configure;

    public function __construct(array $c)
    {
        static::configure($this, $c);
    }
}

$a = new A([]);

print_r($a);