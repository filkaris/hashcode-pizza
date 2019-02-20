<?php

declare(strict_types=1);

namespace App;

class Input
{
    // Rows
    private $R;

    // Columns
    private $C;

    // Minimum of each ingredient in slice
    private $L;

    // Maximum cells of slice
    private $H;

    // String
    private $pizza;

    public function __construct(string $filename)
    {
        $f = fopen($filename, 'r');
        $this->parseInputFile($f);
    }

    public function getR(): int
    {
        return $this->R;
    }

    public function getC(): int
    {
        return $this->C;
    }

    public function getL(): int
    {
        return $this->L;
    }

    public function getH(): int
    {
        return $this->H;
    }

    public function getPizza(): string
    {
        return $this->pizza;
    }

    private function parseInputFile(int $handle): void
    {
        while ($line = fgets($handle)) {
            echo 'me';
        }
    }
}
