<?php

namespace Factories;

use Coordinates\Coordinate;
use Directions\IDirection;
use Directions\Left;

class LCommandFactory extends DirectionFactory
{
    public static function makeDirection(Coordinate $coordinate): IDirection
    {
        return new Left($coordinate);
    }
}
