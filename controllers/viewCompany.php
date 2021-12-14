<?php 

use Imones\Database;
use Imones\imone;
use Imones\Request;

$connection = Database::connect();
$companies = new imone($connection);
$id = intval(basename(Request::uri()));
$company = $companies->viewCompany($id);

require 'view/pages/viewCompany.view.php';