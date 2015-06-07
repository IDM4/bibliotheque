<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Bibliothèque</title>
        <link rel="stylesheet" type="text/css" href="./screen.css">
    </head>
    <body>
        <div id="header">
            <h1>
                Bibliothèque
            </h1>
            <ul>
                <li>
                    Accueil
                </li>
                <li>
                    Auteur
                </li>
                <li>
                    Livres
                </li>
                <li>
                    Editeur
                </li>
            </ul>
            <form method="get">
                <label>rechercher par : </label>
                <select>
                    <option>Titre</option>
                    <option>Auteur</option>
                    <option>Edition</option>
                    <option>Langue</option>
                    <option>Emplacement</option>
                </select>
                <input type="submit"/>
            </form>
        </div>
    </body>
</html>

<?php /*
require_once('../controllers/controller.php');
$controller = new Controller;
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Bibliothèque</title>
        <link rel="stylesheet" type="text/css" href="./screen.css">
    </head>
    <body>
        <h1>Bibliothèque</h1>
        <div id="search">
            <h2>Recherche</h2>
            <form>

            </form>
        </div>
        <div id="books">
            <h2>Résultats</h2>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Auteur</th>
                    <th>Genre</th>
                    <?php // ... ?>
                </tr>
                <?php echo $controller->books($POST); ?>
            </table>
        </div>
    </body>
</html>
