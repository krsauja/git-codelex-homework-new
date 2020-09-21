<?php

namespace app\Choice;

abstract class Spice
{
    abstract function getToTell(): string;

    public function getName(): string
    {
        return get_class($this);
    }
}