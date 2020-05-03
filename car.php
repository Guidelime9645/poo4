<?php
class Cars extends Vehicle implements LightableInterface
{

    public function switchOn(bool $percentage) :boolean
    {
       return true;
    }

    public function switchOff(bool $percentage) :boolean
    {
       return false;
    }



}


