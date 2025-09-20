<?php
namespace Ahmed\App;

class Book
{
    public function __construct(
        public readonly string $title,
        public readonly string $author,
        public readonly string $year
    ) { }

    public function getDetails()
    {
        return  'the title is :' . $this->title . ' | Author:' . $this->author . ' | Year:' . $this->year ."\n";
    }

    public static function gnerateBooksFromArray (array $booksList ) :array {
        $arrayOfBooks  = [];
        foreach( $booksList as $book ){
            if (count($book) == 3) {
                $arrayOfBooks[] =  new self( $book['title'] , $book['author'] , $book['year']) ;
            }
        }
        return $arrayOfBooks; 
    }

}
