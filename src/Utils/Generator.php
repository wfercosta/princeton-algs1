<?php

namespace Utils;

/**
 * Class intend to hold generator functions.
 * @package Utils
 */
class Generator
{

    /**
     *
     * Range generator function.
     *
     * @param int $x
     *  From value.
     *
     * @param int $y
     *  To value.
     *
     * @param int $step
     *  Step value.
     *
     * @return \Generator
     *  Return the current value of the step.
     */
    public static function range(int $x, int $y, int $step = 1) {
        for (; $x < $y; $x+=$step) {
            yield $x;
        }
    }

}