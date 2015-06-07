<?php

require_once('book.class.php');
require_once('author.class.php');
require_once('genre.class.php');
require_once('language.class.php');
require_once('location.class.php');
require_once('editor.class.php');
require_once('author_book.class.php');


class Mysql {

    public $bdd;

    private $host = 'localhost';
    private $db = 'test';
    private $charset = 'utf8';
    private $user = 'root';
    private $pwd = 'root';

    public function __construct()
    {
        require_once('../parameters.php');

        $this->host = $app['host'];
        $this->db = $app['db'];
        $this->charset = $app['charset'];
        $this->user = $app['user'];
        $this->pwd = $app['pwd'];

        $this->bdd = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db . ';charset=' . $this->charset, $this->user, $this->pwd);
    }

    public function getBooks($p = array())
    {
        $req = 'SELECT * FROM books';

        if(isset($p['id']))
             $req .= ' WHERE id = ' . $p['id'];

        if(isset($p['title']))
             $req .= ' WHERE title = %' . $p['title'] . '%';

        if(isset($p['genre_id']))
             $req .= ' WHERE genre_id = ' . $p['genre_id'];

        if(isset($p['editor_id']))
             $req .= ' WHERE editor_id = ' . $p['editor_id'];

        if(isset($p['location_id']))
             $req .= ' WHERE location_id = ' . $p['title'];


        $query = $this->bdd->query($req);
        $books = array();

        while($data = $query->fetch())
        {
            $book = new Book();
            $book->parse($data);
            $books[] = $book;
        }

        return $books;
    }

    public function getGenreById($id)
    {
        $rep = $this->bdd->query('SELECT * FROM genres WHERE id = $id');
        $data = $rep->fetch();

        $book = new Genre();
        $book->parse($data);

        return $book;
    }

    public function addGenre($genre)
    {
        $req = $this->bdd->prepare('INSERT INTO genres');
        $req->execute($genre->serialize());
    }

    public function updateGenre($genre)
    {
        $req = $this->bdd->prepare('INSERT INTO genres');
        $req->execute($genre->serialize());
    }


}
