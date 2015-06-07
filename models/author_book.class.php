<?php

class Author_book {

    protected $id;
    protected $author_id;
    protected $book_id;

    public function getId()
    {
        return $this->id;
    }

    public function setAuthor_id($author_id)
    {
        $this->author_id = $author_id;
        return $this;
    }

    public function getAuthor_id()
    {
        return $this->author_id;
    }

    public function setBook_id($book_id)
    {
        $this->book_id = $book_id;
        return $this;
    }

}
