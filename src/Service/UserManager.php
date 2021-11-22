<?php

namespace App\Service;

class UserManager
{
    public function sayHello(string $name): string
    {
        return sprintf('Hello %s, how are you ?', $name);
    }
}