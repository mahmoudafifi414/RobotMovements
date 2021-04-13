<?php

namespace Factories;
use Coordinates\Coordinate;
use Directions\IDirection;
use Directions\Up;

class FCommandFactory extends DirectionFactory
{
    public static function makeDirection(Coordinate $coordinate): IDirection
    {
        return new Up($coordinate);
    }
}
