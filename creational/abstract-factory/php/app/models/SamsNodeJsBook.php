<?php

namespace App\Models;

class SamsNodeJsBook extends AbstractNodeJsBook {
    private $author;
    private $title;

    function __construct() {
        $this->author = "Sams NodeJs Book made by Sams";
        $this->title = "Amazing NodeJs Book";
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