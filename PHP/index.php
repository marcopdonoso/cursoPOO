<?php

require_once 'car.php';
require_once 'uberX.php';
require_once 'uberPool.php';
require_once 'uberVan.php';
require_once 'account.php';

/*$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->printDataCar();*/

$uberPool = new UberPool("KJH145", new Account("Andrea Guachin", "TYU456"), "Dodge", "Willy");
$uberPool->setPassenger(4);
$uberPool->printDataCar();

/*$uberVan = new UberVan("GJH54312", new Account("San Pedro","SP87"));
$uberVan->setPassenger(6);
$uberVan->printDataCar();*/
?>