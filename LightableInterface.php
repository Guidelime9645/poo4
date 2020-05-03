<?php
interface LightableInterface
{
    public function switchOn(bool $percentage) :boolean;
    public function switchOff(bool $percentage) :boolean;
}