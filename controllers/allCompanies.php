<?php 

use Imones\Database;
use Imones\imone;
use Imones\Request;

$connection = Database::connect();
$companies = new imone($connection);
$page = intval(basename(Request::uri()));
if($page == 0) $page = 1;

require 'view/pages/allCompanies.view.php';