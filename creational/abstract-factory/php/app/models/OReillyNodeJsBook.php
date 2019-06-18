<?php

namespace App\Models;

class OReillyNodeJsBook extends AbstractNodeJsBook {
    private $author;
    private $title;

    function __construct() {
        $this->author = "NodeJS Book Author made by OReilly";
        $this->title = "Awesome NodeJS Book";
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