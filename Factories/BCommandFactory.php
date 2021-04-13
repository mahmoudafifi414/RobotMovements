<?php

namespace Factories;

use Coordinates\Coordinate;
use Directions\Down;
use Directions\IDirection;

class BCommandFactory extends DirectionFactory
{
    public static function makeDirection(Coordinate $coordinate): IDirection
    {
        return new Down($coordinate);
    }
}
