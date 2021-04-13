<?php

namespace Factories;
use Coordinates\Coordinate;
use Directions\IDirection;

abstract class DirectionFactory
{
    abstract static function makeDirection(Coordinate $coordinate): IDirection;
}
