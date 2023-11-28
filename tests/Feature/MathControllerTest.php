<?php

namespace Tests\Feature;

use Tests\TestCase;

class MathControllerTest extends TestCase
{
    public function testAdd()
    {
        $response = $this->get('/add/2/3');

        $response->assertStatus(200)
            ->assertSeeText('5');
    }

    public function testSubtract()
    {
        $response = $this->get('/subtract/5/2');

        $response->assertStatus(200)
            ->assertSeeText('3');
    }

    public function testMultiply()
    {
        $response = $this->get('/multiply/4/3');

        $response->assertStatus(200)
            ->assertSeeText('12');
    }

    public function testDivide()
    {
        $response = $this->get('/divide/10/2');

        $response->assertStatus(200)
            ->assertSeeText('5');
        
        $response = $this->get('/divide/5/0');

        $response->assertStatus(200)
            ->assertSeeText('Cannot divide by zero');
    }

    public function testPower()
    {
        $response = $this->get('/power/2/3');

        $response->assertStatus(200)
            ->assertSeeText('8');
    }

    public function testSquareRoot()
    {
        $response = $this->get('/square-root/25');

        $response->assertStatus(200)
            ->assertSeeText('5');
    }
}
