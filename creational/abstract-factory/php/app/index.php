<?php

require __DIR__.'/../vendor/autoload.php';

use App\Factory\OReillyBookFactory;
use App\Factory\SamsBookFactory;

$factoryInstance = new OReillyBookFactory;
$phpBook = $factoryInstance->makePHPBook();
$nodeJsBook = $factoryInstance->makeNodeJsBook();

writeln("(OReillyBookFactory)");
writeln('PHP Book (Title): '.$phpBook->getTitle());
writeln('NodeJS Book (Title): '.$nodeJsBook->getTitle());

writeln("----");

$factoryInstance = new SamsBookFactory;
$phpBook = $factoryInstance->makePHPBook();
$nodeJsBook = $factoryInstance->makeNodeJsBook();

writeln("(SamsBookFactory)");
writeln('PHP Book (Title): '.$phpBook->getTitle());
writeln('NodeJS Book (Title): '.$nodeJsBook->getTitle());

function writeln($line_in) {
    echo $line_in."\n";
}   
