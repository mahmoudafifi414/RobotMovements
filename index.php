<?php
require 'vendor/autoload.php';

use Adapters\DirectionIDirectionCommandStrategy;
use Controllers\Controller;
use Coordinates\X;
use Coordinates\Y;
use Output\Output;
use Output\OutputDecorator;

$x = new X();
$y = new Y();
$directionCommand = new DirectionIDirectionCommandStrategy($x, $y);
$controller = new Controller($directionCommand, 'FFRFL');
$output = new Output($x->getValue(), $y->getValue());
$outputDecorator = new OutputDecorator($output);
echo $outputDecorator->showOutputConcatenation();

