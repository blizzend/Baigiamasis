<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php"?>
        <div class="container text-center">
            <h1><?=$company['pavadinimas']?></h1>
                <ul>
                    <li>Kodas: <?=$company['kodas']?></li>
                    <li>PVM Kodas: <?=$company['pvm_kodas']?></li>
                    <li>Adresas: <?=$company['adresas']?></li>
                    <li>Telefono nr.: <?=$company['telefonas']?></li>
                    <li>El. pastas: <?=$company['elpastas']?></li>
                    <li>Veikla: <?=$company['veikla']?></li>
                    <li>Vadovas: <?=$company['vadovas']?></li>
                </ul>
                <a href="/edit-company/<?=$company['id']?>" class="btn btn-success">Redaguoti</a>
                <a href="/delete-company/<?=$company['id']?>" class="btn btn-primary">Istrinti</a>
            </div>
      </body>
</html>