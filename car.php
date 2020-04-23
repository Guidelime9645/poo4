<?php
class Cars{
    /**
     * @var bool
     */
    private $hasParkBrake;



    public function start()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception("Activé");
        }
    }

    /**
     * Get the value of hasParkBrake
     *
     * @return  bool
     */
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @param  bool  $hasParkBrake
     *
     * @return  self
     */
    public function setHasParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}