<?php
declare(strict_types=1);

namespace App;

class Main
{
    public function __invoke(string $filename): string
    {
        $input = new Input($filename);
        $output = new Output();

        $r1 = 0;
        $r2 = $r1 + 1;
        $lastRow = new Row();

        $finalRows = [];
        while ($r1 < $input->getR()) {
            $row = $this->sliceRow($r1, $r2, $input);
            if ($row->getScore() < $lastRow->getScore()) {
                $output->addRow($row);

                $r1 = $r2 + 1;
                $r2 = $r1 + 1;
                $lastRow = new Row();
            } else {
                $r2++;
                $lastRow = $row;
            }
        }


        $output->addSlice(new Slice(0, 0, 2, 1));
        $output->addSlice(new Slice(0, 2, 2, 2));
        $output->addSlice(new Slice(0, 3, 2, 4));

        echo $output;
    }
    private function sliceRow(int $r1, int $r2, Input $input): Row
    {
        return new Row();
    }
}
