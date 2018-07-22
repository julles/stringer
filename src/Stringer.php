<?php

namespace RezaAr\Stringer;

class Stringer
{
    protected $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function reverse()
    {
        $this->string = strrev($this->string);

        return $this;
    }

    public function substring($start = 0, $end = 0)
    {
        $this->string = substr($this->string, $start, $end);

        return $this;
    }

    public function custom(callable $call)
    {
        $this->string = $call($this->string);

        return $this;
    }

    public function camelCase($separator = ' ')
    {
        $string = $this->string;
        $explode = explode($separator, $string);
        $result = '';
        foreach ($explode as $index => $row) {
            $result .= ucfirst($row);
        }
        $this->string = $result;

        return $this;
    }

    public function appendFirst($first = '')
    {
        $this->string = $first.$this->string;

        return $this;
    }

    public function appendLast($last = '')
    {
        $this->string = $this->string.$last;

        return $this;
    }

    public function repeat($loop = 1, $separator = '')
    {
        $result = '';
        for ($a = 0; $a < $loop; $a++) {
            $result .= $this->string.$separator;
        }
        $this->string = $result;

        return $this;
    }

    public function upperFirst()
    {
        $this->string = ucfirst($this->string);

        return $this;
    }

    public function lowerFirst()
    {
        $this->string = lcfirst($this->string);

        return $this;
    }

    public function upperLast()
    {
        $last = ucfirst(strrev($this->string));
        $this->string = strrev($last);

        return $this;
    }

    public function lowerLast()
    {
        $last = lcfirst(strrev($this->string));
        $this->string = strrev($last);

        return $this;
    }

    public function replace($search, $replace)
    {
        $replace = str_replace($search, $replace, $this->string);

        $this->string = $replace;

        return $this;
    }

    public function shuffle()
    {
        $this->string = str_shuffle($this->string);

        return $this;
    }

    public function display()
    {
        return $this->string;
    }
}
