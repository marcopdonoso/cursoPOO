<?php

require_once 'account.php';

class Car
{
    public $id;
    public $license;
    public $driver;
    protected $passenger; // Es importante que este atributo esté marcado como protected para poder ser manipulado por las subclases

    public function __construct($license,Account $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo "License: " . $this->license . " Driver: " . $this->driver->name . " Document: " . $this->driver->document;
    }

    public function getPassenger() {
        return $this->passenger;
    }

    public function setPassenger($passenger) {
        if ($passenger == 4) {
            $this->passenger = $passenger;
        }
        else {
            echo "Necesitas asignar 4 pasajeros";
        }
    }
}