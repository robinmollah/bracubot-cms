<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Schema;
use App\Teacher;
use Illuminate\Foundation\Testing\WithFaker;

class TeacherTest extends TestCase
{

    use RefreshDatabase, WithFaker;
    private $teacher;

    public function setUp(): void
    {
        parent::setUp();
        $this->teacher = new Teacher;
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }



    /** @test */
    public function add_a_teacher(){
        $this->teacher->initial = "RRR";
        $this->teacher->name = "Robert Roar";
//        $teacher->save();
//        $retrieved_teacher = Teacher::find("RRR");
        $this->assertEquals($this->teacher->name, "Robert Roar");
    }


    /** @test */
    public function update_a_teacher(){
        $this->teacher->name = "Robert Rock";
        $this->assertEquals($this->teacher->name, "Robert Rock");
    }

    /** @test */
    public function drop_a_teacher(){
        $this->teacher = null;
        $this->assertNull($this->teacher);
    }
}
