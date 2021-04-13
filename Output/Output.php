<?php

namespace Output;
class Output
{
    private string $xValue;
    private string $yValue;
    public function __construct($xValue, $yValue)
    {
        $this->xValue = $xValue;
        $this->yValue = $yValue;
    }

    public function getXValue(): string
    {
        return $this->xValue;
    }

    public function getYValue(): string
    {
        return $this->yValue;
    }
}
