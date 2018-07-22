<?php

include "vendor/autoload.php";

// $str = stringer("reza");
echo $str = stringer('azer')
	->reverse()
	->replace("a","i")
	->repeat(2," ")
	->display();