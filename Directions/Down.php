<?php

namespace Directions;
use Coordinates\Coordinate;
class Down implements IDirection
{
    private Coordinate $coordinate;
    public function __construct(Coordinate $coordinate)
    {
        $this->coordinate = $coordinate;
    }

    public function move()
    {
        $this->coordinate->decrement();
    }
}
