<?php

namespace Factories;

use Coordinates\Coordinate;
use Directions\IDirection;
use Directions\Right;

class RCommandFactory extends DirectionFactory
{

    public static function makeDirection(Coordinate $coordinate): IDirection
    {
        return new Right($coordinate);
    }
}
