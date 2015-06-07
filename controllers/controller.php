<?php

require_once('../models/mysql.class.php');

class Controller
{
    protected $data;
    protected $sql;

    public function __construct($data = array())
    {
        $this->data = $data;
        $this->sql = new Mysql();
    }

    public function books()
    {
        $books = $sql->getBooks($self->data);

        $string = '';

        $offset = 10*($GET['p']-1) + 1;
        for ($i = $offset ; $i < $offset + 10 ; $i++)
        {
            $string .= '<tr><td>' . $books[$i]->getTitle . '</td><td>' . $books[$i]->getAuthorName . '</td><td>' . $books[$i]->getGenre . '</td></tr>';
        }

        return $string;
    }

    public function pages()
    {
        $string = '';

        /*if($self->data['p'] > 1)
        {
            $string .= '<a href=in
        }*/

        $string .= $this->data['p'];

        return $string;
    }



    public function book()
    {
        $books = $this->sql->getBooks($this->data);
        return $books[0];
    }
}
