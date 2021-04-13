<?php

namespace Adapters;
interface IDirectionCommandStrategy
{
  public function processCommand($commandSplit);
}
