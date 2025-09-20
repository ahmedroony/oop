<?php
//class is a blueprint
    class Book {
        public $title;
        public $Author;
        public $year;
        public function __construct($title,$Author,$year)
        {
            $this->title = $title;
            $this->Author = $Author;
            $this->year = $year;
        }
        public function getDetails(){
            echo 'the title is :' . $this->title . 'Author:' . $this->Author . 'Year:' . $this->year;
        }
    }
    class library {
       public $books = [];//story books here
       public function addBooks(Book $book){
        $this->books[] = $book;
       }
       public function listbooks(){
            foreach ($this->books as $book){
                    echo $book->getDetails().'<br>';
            }
       }
       public function FindBook(library $find){
           $this->$find = array_search('title',$this->title);
       }

    }
    $bookOne = new Book('The Great Gatsby |','F. Scott Fitzgerald |',' 1925');
    echo $bookOne->getDetails();
    echo '<br>';
    $bookTwo = new Book('1984|','George Orwell|',' 1949');
    echo $bookTwo->getDetails();
    echo '<br>';
    $bookThere = new Book('Clean Code|','Robert C. Martin|','2008');
    echo $bookThere->getDetails();
    echo '<br>';

    $libraryOne = new library;
    $libraryOne->addBooks($bookOne);
    $libraryOne->addBooks($bookTwo);
    $libraryOne->addBooks($bookThere);
    $libraryOne->listbooks();
?>