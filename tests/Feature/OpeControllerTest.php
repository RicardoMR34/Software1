<?php

namespace Tests\Feature;

use Tests\TestCase;

class OpeControllerTest extends TestCase
{
    public function testSuma()
    {
        $response = $this->get('/suma/1/3');

        $response->assertStatus(200)
            ->assertSeeText('4');
    }

    public function testResta()
    {
        $response = $this->get('/resta/5/2');

        $response->assertStatus(200)
            ->assertSeeText('3');
    }

    public function testMultiplicacion()
    {
        $response = $this->get('/multiplicacion/4/3');

        $response->assertStatus(200)
            ->assertSeeText('12');
    }

    public function testDivision()
    {
        $response = $this->get('/division/10/2');

        $response->assertStatus(200)
            ->assertSeeText('5');
        
        
    }

    public function testPotencia()
    {
        $response = $this->get('/potencia/2/3');

        $response->assertStatus(200)
            ->assertSeeText('8');
    }

    public function testRaiz()
    {
        $response = $this->get('/raiz/25');

        $response->assertStatus(200)
            ->assertSeeText('5');
    }
}
