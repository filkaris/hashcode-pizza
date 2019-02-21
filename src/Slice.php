<?php

declare(strict_types=1);

namespace App;

class Slice
{
    private $r1;

    private $c1;

    private $r2;

    private $c2;

    public function __construct(int $r1, int $c1, int $r2, int $c2)
    {
        $this->r1 = $r1;
        $this->c1 = $c1;
        $this->r2 = $r2;
        $this->c2 = $c2;
    }

    public function getScore(): int
    {
        $height = (int)abs($this->r1 - $this->r2);
        $width = (int)abs($this->c1 - $this->c2);

        return $width * $height;
    }

    public function __toString(): string
    {
        return "{$this->r1} {$this->c1} {$this->r2} {$this->c2}";
    }
}
