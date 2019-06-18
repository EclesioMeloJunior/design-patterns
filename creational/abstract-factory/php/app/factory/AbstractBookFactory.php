<?php

namespace App\Factory;

abstract class AbstractBookFactory {
    abstract function makePHPBook();
    abstract function makeNodeJsBook();
    
    abstract function makePHPBookWithName($name);
}