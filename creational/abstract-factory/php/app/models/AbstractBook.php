<?php

namespace App\Models;

abstract class AbstractBook {
    abstract function getAuthor();
    abstract function getTitle();
}

abstract class AbstractPHPBook extends AbstractBook {
    protected $subject = "PHP";
}

abstract class AbstractNodeJsBook extends AbstractBook {
    protected $subject = "NodeJs";
}