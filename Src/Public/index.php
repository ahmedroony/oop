<?php
declare(strict_types=1);
require_once(__DIR__ . "/../../vendor/autoload.php");

use Ahmed\App\Book;
use Ahmed\App\Library;
use Ahmed\Data\BooksData;

//Logic
$books= Book::gnerateBooksFromArray(BooksData::$data);
$alexLib= new Library();
$alexLib->addBooks($books);


//UI
require_once __DIR__.'/../UI/main-page.php';