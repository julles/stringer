<?php namespace Testing;

use PHPUnit\Framework\TestCase;

class StringerTest extends TestCase
{
    public function testReverse()
    {
        $result   = "azer";
    
        $stringer = stringer("reza")
            ->reverse()
            ->display();
    
        $this->assertEquals($result, $stringer);
    }

    public function testSubstring()
    {
        $result = "r";

        $string = stringer("reza")
            ->substring(0, 1)
            ->display();

        $this->assertEquals($result, $string);
    }

    public function testCustom()
    {
        $result = "reza ar";

        $string = stringer("reza")
            ->custom(function ($string) {
                return $string . ' ar';
            })
            ->display();

        $this->assertEquals($result, $string);
    }

    public function testCamelCase()
    {
    	$result = "CamelCase";

    	$string = stringer("camel case")
    		->camelCase()
            ->display();

        $this->assertEquals($result, $string);
    }

    public function testAppendFirst()
    {
    	$result = "muhamad reza";

    	$string = stringer("reza")
    		->appendFirst("muhamad ")
    		->display();

    	$this->assertEquals($result,$string);
    }

    public function testAppendLast()
    {
    	$result = "muhamad reza";

    	$string = stringer("muhamad")
    		->appendLast(" reza")
    		->display();

    	$this->assertEquals($result,$string);
    }

    public function testRepeat()
    {
    	$result = "reza reza ";

    	$string = stringer("reza")
    		->repeat(2," ")
    		->display();

    	$this->assertEquals($result,$string);
    }

    public function testUpperFirst()
    {
    	$result = "Reza";

    	$string = stringer("reza")
    		->upperFirst()
    		->display();

    	$this->assertEquals($result,$string);
    }

    public function testLowerFirst()
    {
    	$result = "reza";

    	$string = stringer("Reza")
    		->lowerFirst()
    		->display();

    	$this->assertEquals($result,$string);
    }

    public function testUpperLast()
    {
    	$result = "rezA";

    	$string = stringer("reza")
    		->upperLast()
    		->display();

    	$this->assertEquals($result,$string);
    }

    public function testLowerLast()
    {
    	$result = "reza";

    	$string = stringer("rezA")
    		->lowerLast()
    		->display();

    	$this->assertEquals($result,$string);
    }

    public function testReplace()
    {
    	$result = "PHP is Awesome";

    	$string = stringer("GO is Awesome")
    		->replace("GO","PHP")
    		->display();

    	$this->assertEquals($result,$string);
    }

    public function testDisplay()
    {
    	$var = "PHP is Awesome";

    	$string = stringer($var)
    		->display();

    	$this->assertEquals($var,$string);
    }


}
