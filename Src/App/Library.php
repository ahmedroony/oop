<?php
declare (strict_types= 1);

namespace Ahmed\App;

class Library 
{
    private $books = []; //story books here
    
    /**
     *  
     * @param array<Book> $book
     * @return void
     */
    public function addBooks(array $books)
    {
        foreach ($books as $book) {
            $this->books[] = $book;
        }
    }
    public function listbooks()
    {
        return $this->books; 
    }

    public function FindBook(library $find)
    {
        // $this->$find = array_search('title', $this->title);
    }
}
