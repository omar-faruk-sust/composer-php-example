<?php

namespace MyApp\Test;

use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_run_successfully()
    {
        $array = [
            "name" => "Jhon"
        ];

        $this->assertEquals(1, 1);
        $this->assertEmpty($array, "The array suppose to be empty");
    }
}