<?php

namespace App;

class Hello 
{
    private $greeting;

    public function hello(string $greeting) : string
    {
        return "Hello {$greeting}";
    }

}