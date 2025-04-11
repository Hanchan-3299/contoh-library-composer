<?php

namespace Devhanchan\Libraryhello;

Class Customer {
    function __construct(private string $name){

    }

    public function sayHello(string $name = 'guest'){
        return "Hello " . $name . ", my name is " . $this->name;
    }
}