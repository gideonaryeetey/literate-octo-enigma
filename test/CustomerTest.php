<?php
require_once __DIR__."/../autoload.php";
use PHPUnit\Framework\TestCase;
use garyeetey\Customer;

class CustomerTest extends TestCase{
// Test methods will go here
    public function testGetTitle(){
        $this->assertSame("Ms./Mrs.", Customer::getTitle("female"));
        $this->assertSame("Mr", Customer::getTitle("male"));
        $this->assertSame("", Customer::getTitle(""));
        $this->assertSame("", Customer::getTitle("daererer"));
    }
}

?>
