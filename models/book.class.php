<?php

class Book {

    protected $id;
    protected $title;
    protected $front_cover;
    protected $summary;
    protected $isbn;
    protected $npages;
    protected $datepub;
    protected $language_id;
    protected $genre_id;
    protected $location_id;
    protected $editor_id;
    protected $created_at;
    protected $updated_at;

    protected $author;

    public function parse($data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        # ...
    }

    public function setId($id)
    {
        $this->io = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setFront_cover($front_cover)
    {
        $this->Front_cover = $front_cover;
        return $this;
    }

    public function getFront_cover()
    {
        return $this->front_cover;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
        return $this;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    # ...

}
