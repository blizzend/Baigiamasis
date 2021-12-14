<?php 

use Imones\Database;
use Imones\imone;
use Imones\Validation;

if(isset($_POST['send'])) {
    $connection = Database::connect();
    $companies = new imone($connection);
    $validation = Validation::newCompany($_POST);
    if($validation != 'Klaidu nerasta') {
        foreach ($validation as $klaida) {
            echo $klaida . '<br>';
        }
    } else {
    $companies->createCompany($_POST);
    }
} else {
    require 'view/pages/newCompany.view.php';
}