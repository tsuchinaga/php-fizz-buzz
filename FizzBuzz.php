<?php

for ($i = 1; $i <= 100; $i++) printf("%s\n", FizzBuzz::fizz_buzz($i));

class FizzBuzz
{

    static function fizz_buzz(int $n)
    {
        if ($n % 15 === 0) return "fizzbuzz";
        else if ($n % 3 === 0) return "fizz";
        else if ($n % 5 === 0) return "buzz";

        return (string)$n;
    }
}
