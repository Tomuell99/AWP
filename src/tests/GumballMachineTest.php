<?php 

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase {
    public $gumballMachineInstance;

    public function setUp() {
        $this->gumballMachineInstance = new GumballMachine;
    }

    public function testIfWheelWorks() {
        $this->gumballMachineInstance->setGumball(100);

        $this->gumballMachineInstance->turnWheel();

        $this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
    }
}

?>