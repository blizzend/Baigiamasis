<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php"?>
            <h1 class="text-white text-center">Visos imones</h1>
            <table class="table text-white">
                <thead>
                    <tr>
                        <th scope="col">Pavadinimas</th>
                        <th scope="col">Adresas</th>
                        <th scope="col">El. Pastas</th>
                    </tr>
                </thead>
            <tbody>
            <?php foreach($companies->allCompanies($page) as $company): ?>
                <tr>
                    <th scope="row"><a href="/imone/<?=$company['id']?>" style="text-decoration: none;"><?=$company['pavadinimas']?></a></th>
                    <td><?=$company['adresas']?></td>
                    <td><?=$company['elpastas']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php if($page != 1): ?>
                    <li class="page-item"><a class="page-link" href="/all/<?=$page-1?>">Atgal</a></li>
                    <?php endif ?>
                    <li class="page-item"><a class="page-link" href="/all/<?=$page+1?>">Toliau</a></li>
                </ul>
                </nav>
    </body>
</html>