<?php 

/**
 * require class GumballMachine
 */
require 'src/GumballMachine.php';

/**
 * using phpunit framework
 */
use PHPUnit\Framework\TestCase;

/**
 * class GumballMachineTest 
 * extends TestCase
 */
class GumballMachineTest extends TestCase {
    /**
     * public object
     */
    public $gumballMachineInstance;

    /**
     * set up function
     */
    public function setUp() {
        $this->gumballMachineInstance = new GumballMachine;
    }

    /**
     * test if wheel works function
     */
    public function testIfWheelWorks() {
        $this->gumballMachineInstance->setGumballs(100);

        $this->gumballMachineInstance->turnWheel();

        $this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
    }
}

?>