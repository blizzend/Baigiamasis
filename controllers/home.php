<?php 

use Imones\Database;
use Imones\imone;
$connection = Database::connect();
$companies = new imone($connection);

if(isset($_POST['send'])) {
    $companies->searchCompany($_POST);
} else {
require 'view/pages/home.view.php';
}