<?php

include_once './RoverMovement.php';

class RoverInfo {

    private $rover;

    public function __construct() {
        $this->rover = new RoverMovement();
    }

    public function getCurrentDirection(){
        return $this->rover->getCurrentDirection();
    }

    public function getPosition(){
        return $this->rover->getPosition();
    }
}
