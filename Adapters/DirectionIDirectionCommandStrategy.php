<?php

namespace Adapters;

use Coordinates\Coordinate;
use Coordinates\X;
use Coordinates\Y;
use Directions\IDirection;
use Factories\BCommandFactory;
use Factories\FCommandFactory;
use Factories\LCommandFactory;
use Factories\RCommandFactory;

class DirectionIDirectionCommandStrategy implements IDirectionCommandStrategy
{
    //these are objects
    private Coordinate $x;
    private Coordinate $y;
    private IDirection $directionInstance;

    public function __construct(X $x, Y $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function processCommand($commandSplit)
    {
        $commandArray = CommandHelpersFacade::splitCommand($commandSplit);
        foreach ($commandArray as $command) {
            $this->calculateCommand($command);
        }
    }

    private function calculateCommand($command)
    {
        switch ($command) {
            case 'F';
                $this->directionInstance = FCommandFactory::makeDirection($this->y);
                break;
            case 'B';
                $this->directionInstance = BCommandFactory::makeDirection($this->y);
                break;
            case 'R';
                $this->directionInstance = RCommandFactory::makeDirection($this->x);
                break;
            case 'L';
                $this->directionInstance = LCommandFactory::makeDirection($this->x);
                break;
        }
        $this->directionInstance->move();
    }
}
