<?php

declare(strict_types=1);
require_once(__DIR__ . "/../../vendor/autoload.php");

use Ahmed\App\Book;
use Ahmed\App\Library;

$bookOne = new Book('The Great Gatsby', 'F. Scott Fitzgerald', ' 1925');
$bookTwo = new Book('1984', 'George Orwell', ' 1949');
$bookThere = new Book('Clean Code', 'Robert C. Martin', '2008');

$books = Book::GenerateBooks([ ]);

$libraryOne = new Library();
$libraryOne->addBooks([$bookOne, $bookTwo, $bookThere]);

$libBooks = $libraryOne->listbooks();


?>

<!-- ----------- WEB ------------ -->

<ul>
    <?php
    foreach ($libBooks as $libBook) {
    ?>
        <li>
            <ul>
                <li><?= $libBook->title ?></li>
                <li><?= $libBook->author ?></li>
                <li><?= $libBook->year ?></li>
            </ul>
        </li>
    <?php
    }
    ?>
</ul>