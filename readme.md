# Stringer

### Introduction

Stringer is stand alone PHP package for string manipulation with an expresive syntax.

### Instalation

This package required composer

``` sh
composer require muhamadrezaar/stringer
```

then in your file php

```
 include "vendor/autoload.php"; 
```

### Example

Here is the basic usage and some examples methods: 

``` sh
<?php
include "vendor/autoload.php";

$str = new RezaAr\Stringer\Stringer("php is awesome");
// or
$str = stringer("php is awesome");

$str->reverse()->display(); // return "emosewa si php"

$str->substring(0,1)->display(); // return "r"

?>

```

Custom Method

``` sh
<?php
$string = stringer('laravel is php framework');
$string->custom(function($string){
		// your own manipulation syntax
	})
	->display()
?>

```

Using chaining method

``` sh
$str = stringer('azer')
	->reverse()
	->replace("a","i")
	->repeat(2," ")
	->display(); // return "rezi rezi"

```

### Available Methods

| Methods |
| ------- |
| ->reverse() |
| ->substring($start = 0, $end = 0) |
| ->custom(callable $string) |
| ->camelCase($separator = " ") |
| ->appendFirst($first="") |
| ->appendLast($last="") |
| ->repeat($loop=1,$separator="") |
| ->upperFirst() |
| ->lowerFirst() |
| ->upperLast() |
| ->lowerLast() |
| ->replace($search,$replace) |
| ->shuffle() |
| ->reverse() |


### License

https://reza.mit-license.org/

Development will continue fork this repo and pull request



