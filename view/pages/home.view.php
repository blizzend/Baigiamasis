<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark">
    <?php include "view/_partials/nav.view.php"?>
        <div class="container text-center">
            <h1 class="text-white">Pagrindinis puslapis</h1>
            <form method="post">
            <input type="text" name="search" placeholder="Imones paieska">
            <button type="submit" name="send">Ieskoti</button>
            </form>
        </div>
    </body>
</html>