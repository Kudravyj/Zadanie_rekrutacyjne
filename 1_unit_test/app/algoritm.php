<?php

class algoritm{
    public function sum($a, $b) {
        if (!is_int($a) || !is_int($b)) {
            throw new InvalidArgumentException();
        }
        return $a + $b;
    }
}
