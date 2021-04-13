<?php

namespace Directions;
use Coordinates\Coordinate;

class Right implements IDirection
{
    private Coordinate $coordinate;
    public function __construct(Coordinate $coordinate)
    {
        $this->coordinate = $coordinate;
    }

    public function move()
    {
        $this->coordinate->increment();
    }
}
