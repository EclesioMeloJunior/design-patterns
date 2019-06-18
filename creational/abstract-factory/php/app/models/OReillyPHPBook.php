<?php

namespace App\Models;

class OReillyPHPBook extends AbstractPHPBook {
    private $author;
    private $title;

    function __construct() {
        $this->author = "PHP Book Author made by OReilly";
        $this->title = "Awesome PHP Book";
    }

    function getAuthor() {
        return $this->author;
    }

    function getTitle() {
        return $this->title;
    }

    function setTitle($title) {
        $this->title = $title;
    }
}