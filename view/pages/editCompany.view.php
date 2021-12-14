<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark">
    <?php include "view/_partials/nav.view.php"?>
        <div class="container text-center w-25 ">
            <h1 class="text-white">Imones redagavimas</h1>
            <form method="post">
                <div class="form-group p-2">
                    <input type="text" name="name" value="<?=$company['pavadinimas']?>" class="form-control "  placeholder="Įmonės Pavadinimas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="code" value="<?=$company['kodas']?>" class="form-control"  placeholder="Įmonės Kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="tax_code" value="<?=$company['pvm_kodas']?>" class="form-control"  placeholder="Įmonės PVM Kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="adress" value="<?=$company['adresas']?>" class="form-control"  placeholder="Įmonės Adresas">
                </div>
                <div class="form-group p-2">
                    <input type="tel" name="phone" value="<?=$company['telefonas']?>" class="form-control"  placeholder="Įmonės Tel. Nr.">
                </div>
                <div class="form-group p-2">
                    <input type="email" name="email" value="<?=$company['elpastas']?>" class="form-control"  placeholder="Įmonės El. paštas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="action" value="<?=$company['veikla']?>" class="form-control"  placeholder="Įmonės Veikla">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="boss" value="<?=$company['vadovas']?>" class="form-control"  placeholder="Įmonės Vadovas">
                </div>
                <div class="text-center">
                    <button type="submit" name="send" class="btn btn-secondary border border-white border border-2 mt-3">Redaguoti</button>
                </div>
            </form>
        </div>
    </body>
</html>