<?php
declare(strict_types=1);

use App\Input;
use App\Output;
use App\Slice;

require __DIR__ . '/vendor/autoload.php';

$input = new Input('resources/example.in');
$output = new Output();
$output->addSlice(new Slice(0, 0, 2, 1));
$output->addSlice(new Slice(0, 2, 2, 2));
$output->addSlice(new Slice(0, 3, 2, 4));

echo $output;
