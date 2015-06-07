<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('../controllers/controller.php');
$controller = new Controller($_GET);
$book = $controller->book();
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Bibliothèque</title>
        <link rel="stylesheet" type="text/css" href="./screen.css">
    </head>
    <body>
        <h1><?php echo $book->getTitle(); ?></h1>
        <div id="details">
            <a href="index.php?author_id=<?php //echo $book->getAuthor()->getId(); ?>"<h2><?php //echo $book->getAuthor()->getFullName(); ?></h2></body></a>
        </div>
    </body>
</html>
