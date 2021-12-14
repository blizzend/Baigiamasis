<?php

$router->define([
    '/' => 'controllers/allCompanies.php',
    '/all' => 'controllers/allCompanies.php',
    '/imone' => 'controllers/viewCompany.php',
    '/new-company' => 'controllers/newCompany.php',
    '/delete-company' => 'controllers/deleteCompany.php',
    '/edit-company' => 'controllers/editCompany.php',
    '/search' => 'controllers/home.php',
    '404' => 'controllers/404.php'

]);

