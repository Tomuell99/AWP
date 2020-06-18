<?php

/**
 * class GumballMachine
 */
class GumballMachine {
    /**
     * private object
     */
    private $gumballs;

    /**
     * getting gumballs
     */
    public function getGumballs() {
        return $this->gumballs;
    }

    /**
     * setting gumballs
     */
    public function setGumballs($amount) {
        $this->gumballs = $amount;
    }
    
    /**
     * turning wheel
     */
    public function turnWheel() {
        $this->setGumballs($this->getGumballs() -1);
    }
}

?>