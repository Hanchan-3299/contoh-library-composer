<?php

namespace Devhanchan\Libraryhello;

Class Customer {
    function __construct(private string $name){

    }

    public function sayHello($name){
        return "Hello " . $name . ", my name is " . $this->name;
    }
}