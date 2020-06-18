<?php 

require 'src/GumballMachine.php';
use PHPUnit\Framework\TestCase;

class GumballMachineTest extends TestCase {
    public $gumballMachineInstance;

    public function setUp() {
        $this->gumballMachineInstance = new GumballMachine;
    }

    public function testIfWheelWorks() {
        $this->gumballMachineInstance->setGumballs(100);

        $this->gumballMachineInstance->turnWheel();

        $this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
    }
}

?>