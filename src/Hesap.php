<?php

namespace Emir;

class Hesap
{
    public $x;

    public function __construct(IslemKontrati $x)
    {
        $this->x = $x;
    }

    public function yap()
    {
        return $this->x->yap();
    }
}
