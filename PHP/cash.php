<?php

require_once 'payment';

class Cash extends Payment {
    public function __construct($id) {
        parent::__construct($id);
    }
}