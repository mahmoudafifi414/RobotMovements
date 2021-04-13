<?php

namespace Coordinates;
abstract class Coordinate
{
    public function increment()
    {
        static::$value++;
    }
    public function decrement()
    {
        static::$value--;
    }
    public function getValue(){
        return static::$value;
    }
}
