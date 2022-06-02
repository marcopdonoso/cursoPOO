<?php

require_once 'car.php';
require_once 'account.php';

$car = new Car("AWW123", new Account("Dumbeldore","ZZZ55"));
$car->printDataCar();
?>