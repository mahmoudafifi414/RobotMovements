<?php

namespace Controllers;
use Adapters\IDirectionCommandStrategy;

class Controller
{
    public function __construct(IDirectionCommandStrategy $command , $commandSplit)
    {
        return $command->processCommand($commandSplit);
    }
}
