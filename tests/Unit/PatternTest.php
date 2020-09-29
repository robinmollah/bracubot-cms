<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PatternTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    private $pattern;

    public function setUp(): void
    {
        parent::setUp();
        $this->pattern = new Pattern;
    }


    /** @test */
    public function add_a_pattern(){
        $this->pattern->id = "10";
        $this->pattern->asking = "greetings";
        $this->pattern->pattern = "^(hi|hello|he(y)+|hlw+|hm+)";

//        $teacher->save();
//        $retrieved_teacher = Teacher::find("RRR");
        $this->assertEquals($this->pattern->asking, "greetings");
    }


    /** @test */
    public function update_a_pattern(){
        $this->pattern->asking = "salute";
        $this->assertEquals($this->pattern->name, "salute");
    }

    /** @test */
    public function drop_a_pattern(){
        $this->pattern = null;
        $this->assertNull($this->pattern);
    }
}
