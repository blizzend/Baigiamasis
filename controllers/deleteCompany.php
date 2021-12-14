<?php

use Imones\Request;
use Imones\Database;
use Imones\imone;

$connection = Database::connect();
$company = new imone($connection);
$id =intval(basename(Request::uri()));

$company->deleteCompany($id);

