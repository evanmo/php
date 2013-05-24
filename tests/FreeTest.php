<?php


class FreeTest extends PHPUnit_Framework_TestCase
{
  private $free = null;

  public function setUp()
  {
    $this->free = new DiveWeb\Free;



  }

  public function tearDown()
  {
    $this->free = null;

  }

  /**
   * @test
   */

  public function testInstanceOf()
  {
    $this->assertInstanceOf('DiveWeb\Free',$this->free);
  }

  /**
   * @expectedException InvalidArgumentException
   */

  public function testInvalidArgumentIsProperlyThrown(){
    $this->free->ata('A');
  }

  public function testValidResult(){
    $this->assertEquals(1,$this->free->ata(33));
  }
}
