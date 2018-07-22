<?php

include "vendor/autoload.php";

$str = stringer("reza");

echo $str->appendFirst()
->display()."\n";