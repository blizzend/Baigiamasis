<?php 

use Imones\Request;
use Imones\Database;
use Imones\imone;
use Imones\Validation;

$connection = Database::connect();
$companies = new imone($connection);
$id = intval(basename(Request::uri()));
$company = $companies->viewCompany($id);

if(isset($_POST['send'])) {
    $validation = Validation::newCompany($_POST);
    if($validation != 'Klaidu nerasta') {
        foreach ($validation as $klaida) {
            echo '<h1>' . $klaida .'</h1> <br>';
        }
    } else {
    $companies->editCompany($id, $_POST);
    }
} else {
    require 'view/pages/editCompany.view.php';
}