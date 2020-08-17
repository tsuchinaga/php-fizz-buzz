<?php

require_once "./FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function test_1をいれたら1が返される()
    {
        $want = "1";
        $got = FizzBuzz::fizz_buzz(1);
        $this->assertEquals($want, $got);
    }

    public function test_2をいれたら2が返される()
    {
        $want = "2";
        $got = FizzBuzz::fizz_buzz(2);
        $this->assertEquals($want, $got);
    }

    public function test_3をいれたらfizzが返される()
    {
        $want = "fizz";
        $got = FizzBuzz::fizz_buzz(3);
        $this->assertEquals($want, $got);
    }

    public function test_5をいれたらbuzzが返される()
    {
        $want = "buzz";
        $got = FizzBuzz::fizz_buzz(5);
        $this->assertEquals($want, $got);
    }

    public function test_15をいれたらfizzbuzzが返される()
    {
        $want = "fizzbuzz";
        $got = FizzBuzz::fizz_buzz(15);
        $this->assertEquals($want, $got);
    }
}
