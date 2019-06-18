<?php

namespace App\Factory;
use App\Models\OReillyPHPBook;
use App\Models\OReillyNodeJsBook;

use App\Models\SamsPHPBook;

/** Implementations of AbstractBookFactory */
class OReillyBookFactory extends AbstractBookFactory {
    private $context = "OReilly";
    
    /** Return a new OReillyPHPBook instance */
    function makePHPBook() {
        return new OReillyPHPBook();
    }

    /** Return a new OReillyNodeJsBook instance */
    function makeNodeJsBook() {
        return new OReillyNodeJsBook();
    }

    function makePHPBookWithName($name) {
       $book = new OReillyPHPBook();
       $book->setTitle($name);

       return $book;
    }
}