<?php
use PHPUnit\Framework\TestCase;

use App\Factory\OReillyBookFactory;
use App\Models\OReillyPHPBook;
use App\Models\OReillyNodeJsBook;

use App\Factory\SamsBookFactory;
use App\Models\SamsPHPBook;
use App\Models\SamsNodeJsBook;

class BookTests extends TestCase {

    function testOReillyPHPBookFactory() {
        $bookFactory = new OReillyBookFactory();
        $book = $bookFactory->makePHPBook();

        $this->assertInstanceOf(OReillyPHPBook::class, $book);
    }

    function testSamsNodeJsBookFactory() {
        $bookFactory = new SamsBookFactory();
        $book = $bookFactory->makeNodeJsBook();

        $this->assertInstanceOf(SamsNodeJsBook::class, $book);
    }

    function testSamsPHPNamedBook() {
        $nomeDoLivro = "LIVRO DE PHP";
        
        $bookFactory = new SamsBookFactory();
        $book = $bookFactory->makePHPBookWithName($nomeDoLivro);

        $title = $book->getTitle();

        $this->assertEquals($nomeDoLivro, "PHP");
    }
}
