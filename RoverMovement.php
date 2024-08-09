<?php

class RoverMovement {

    private const DEFAULT_DIRECTION_X = 0;

    private const DEFAULT_DIRECTION_Y = 0;

    private const ROTATION = 90;

    private $currentX = 0;

    private $currentY = 0;

    private $currentRotation = 0;
    
    public function __construct(){
        //here for example we can add some start params
        //i dont need it because of all params already set by default;
    }

    public function moveForward(){
        switch($currentRotation){
            case 0:
                //Y+1
                break;
            case 90:
                //X+1
                break;
            case 180:
                //X-1
                break;
            case 270:
                //Y-1
                break;
            case -360:
                //Y+1
                break;
            case -90:
                //Y-1
                break;
            case -180:
                //X-1
                break;
            case -270:
                //X+1
                break;
            case > 360:
                //reduce back)
                break;
            case < -360:
                //increase back)
                break;
        }
    }

    public function moveBackward(){
        switch($currentRotation){
            case 0:
                //Y-1
                break;
            case 90:
                //X-1
                break;
            case 180:
                //X+1
                break;
            case 270:
                //Y+1
                break;
            case -360:
                //Y-1
                break;
            case -90:
                //Y+1
                break;
            case -180:
                //X+1
                break;
            case -270:
                //X-1
                break;
            case > 360:
                //reduce back)
                break;
            case < -360:
                //increase back)
                break;
        }
    }

    public function moveLeft(){
        $this->moveForward($this->currentRotation+self::ROTATION);
    }

    public function moveRight(){
        $this->moveForward($this->currentRotation-self::ROTATION);
    }
    
    public getPosition(){
        return [
            'x' => $this->currentX,
            'y' => $this->currentY
        ];
    }
    
    public getCurrentDirection(){
        switch(){
            case 0:
                    return 'look up';
                break;
            case 90:
                    return 'look right';
                break;
            case 180:
                    return 'look down';
                break;
            case 270:
                    return 'look left';
                break;
            case -360:
                    return 'look up';
                break;
            case -90:
                    return 'look left';
                break;
            case -180:
                    return 'look down';
                break;
            case -270:
                    return 'look right';
                break;
            case > 360:
                //reduce back)
                break;
            case < -360:
                //increase back)
                break;
        }
    }
}
