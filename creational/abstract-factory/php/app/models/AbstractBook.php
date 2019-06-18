<?php

namespace App\Models;

abstract class AbstractBook {
    abstract function getAuthor();
    abstract function getTitle();
    abstract function setTitle($title);
}

abstract class AbstractPHPBook extends AbstractBook {
    protected $subject = "PHP";
}

abstract class AbstractNodeJsBook extends AbstractBook {
    protected $subject = "NodeJs";
}