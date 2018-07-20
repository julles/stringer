<?php namespace Testing;

use PHPUnit\Framework\TestCase;

class StringerTest extends TestCase
{
	public function testReverse()
	{
	    $result = "azer";
	    $stringer =  stringer("reza")->reverse()->display();
	    $this->assertEquals($result,$stringer);
	}
}