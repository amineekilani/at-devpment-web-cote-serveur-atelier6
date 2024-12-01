<!DOCTYPE html>
<html>
    <head>
        <title>Recherche</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Public/bootstrap.css">
        <link rel="icon" href="https://amineekilani.github.io/portfolio/Photo.png">
    </head>
    <body>
        <div class="container mt-3">
            <form action="../../Controller/Appartement/Recherche.php" method="post">
                <fieldset>
                    <legend>Recherche</legend>
                    <div class="mb-3">
                        Référence :
                        <input type="search" name="recherche" placeholder="Rechercher">
                        <input type="submit" value="Rechercher" name="ok">
                    </div>
                </fieldset>
            </div>
        </form>
    </body>
</html>