<?php

include 'vendor/autoload.php';
echo $str = stringer('azer')
    ->reverse()
    ->replace('a', 'i')
    ->repeat(2, ' ')
    ->display();
