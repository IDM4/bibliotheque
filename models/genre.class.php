<?php

class Genre {

    protected $id;
    protected $name;
    protected $logo;
    protected $created_at;
    protected $updated_at;

    private function update()
    {
        $this->updated_at = time();
    }

    public function __construct()
    {
        $this->created_at = time();
    }

    public function parse($data)
    {
        $this->id = $data['id'];
        $this->name = $data['data'];
        $this->logo = $data['logo'];
        $this->created_at = $data['created_at'];
        $this->updated_at = $data['updated_at'];
    }

    public function save()
    {
        $data['id'] = $this->id;
        $data['data'] = $this->name;
        $data['logo'] = $this->logo;
        $data['created_at'] = $this->created_at;
        $data['updated_at'] = $this->updated_at;

        return $data;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function getUpdated_at()
    {
        return $this->updated_at;
    }
}
