<?php

namespace App\Models;

class SamsPHPBook extends AbstractPHPBook {
    private $author;
    private $title;

    function __construct() {
        $this->author = "Sams PHP Book made by Sams";
        $this->title = "Amazing PHP Book";
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