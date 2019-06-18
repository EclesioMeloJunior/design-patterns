<?php

namespace App\Factory;
use App\Models\SamsPHPBook;
use App\Models\SamsNodeJsBook;

class SamsBookFactory extends AbstractBookFactory {
    private $context = "Sams";

    function makePHPBook() {
        return new SamsPHPBook();
    }

    function makeNodeJsBook() {
        return new SamsNodeJsBook();
    }

    function makePHPBookWithName($name) {
        $book = new SamsPHPBook();
        $book->setTitle($name);
 
        return $book;
     }
}