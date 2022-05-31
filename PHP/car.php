<?php

require_once 'account.php';

class Car
{
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license,Account $driver, $passenger)
    {
        $this->license = $license;
        $this->driver = $driver;
        $this->passenger = $passenger;
    }

    public function printDataCar() {
        echo "License: " . $this->license . " Driver: " . $this->driver->name . " Document: " . $this->driver->document . " Pasajeros: " . $this->passenger;
    }
}