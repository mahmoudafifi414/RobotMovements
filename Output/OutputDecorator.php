<?php

namespace Output;
class OutputDecorator
{
    private Output $output;

    public function __construct(Output $output)
    {
        $this->output = $output;
    }

    public function showOutputConcatenation(): string
    {
        return 'Final position is x=' . $this->output->getXValue() . ' y=' . $this->output->getYValue();
    }
}
