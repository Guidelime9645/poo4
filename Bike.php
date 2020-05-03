<?php
class Bike extends Vehicle implements LightableInterface
{
    public $dynamo;
    public $currentSpeed;

    public function dynamo()
    {
        if($this->currentSpeed >10){
            return $this->switchOn(true);
        }else{
            return $this->switchOff(false);
        }
    }

}