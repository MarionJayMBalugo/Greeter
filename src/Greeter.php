<?php

namespace Marion\Greeter;

class Greeter {
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}