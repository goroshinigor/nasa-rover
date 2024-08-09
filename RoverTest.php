<?php

include_once './RoverMovement.php';

class RoverTest {

    public $rover;

    public function __construct() {
        $this->rover = new RoverMovement();
    }

    public function journeyToOlympusMons(){
        try {
            $this->rover->moveForward();
            $this->rover->moveForward();
            $this->rover->moveLeft();
            $this->rover->moveRight();
            $this->rover->moveBackward();

            $this->rover->getCurrentDirection();
            $this->rover->getPosition();
        } catch (Exception $ex) {
            return false;
        }
    }
}
