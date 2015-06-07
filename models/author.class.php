<?php

class Author {

    protected $id;
    protected $name;
    protected $first_name;
    protected $photo;
    protected $datebirth;
    protected $datedeath;
    protected $bio;
    protected $created_at;
    protected $updated_at;

    public function __construct()
    {
        $this->created_at = time();
    }

    private function update()
    {
        $this->updated_at = time();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->update();
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setFirst_Name($first_name)
    {
        $this->first_name = $first_name;
        $this->update();
        return $this;
    }

    public function getFirst_Name()
    {
        return $this->first_name;
    }

    public function getFullName()
    {
        return $this->name . ' ' . $this->first_name;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
        $this->update();
        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setDatebirth($datebirth)
    {
        $this->datebirth = $datebirth;
        $this->update();
        return $this;
    }

    public function getDatebirth()
    {
        return $this->datebirth;
    }

    public function setDatedeath($datedeath)
    {
        $this->datedeath = $datedeath;
        $this->update();
        return $this;
    }

    public function getDatedeath()
    {
        return $this->datedeath;
    }

    public function setBio($bio)
    {
        $this->bio = $bio;
        $this->update();
        return $this;
    }

    public function getBio()
    {
        return $this->bio;
    }

}
