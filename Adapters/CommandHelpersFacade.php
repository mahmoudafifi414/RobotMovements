<?php


namespace Adapters;


class CommandHelpersFacade
{
    public static function splitCommand($commandSplit): array
    {
        return str_split($commandSplit);
    }
}
