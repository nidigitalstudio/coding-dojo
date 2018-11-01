<?php

namespace Tests\Dia3;

use App\Dia3\Ampulheta;
use PHPUnit\Framework\TestCase;

class AmpulhetaTest extends TestCase
{
    public $ampulheta;

    public function setUp()
    {
        // $this->ampulheta = new Ampulheta(5, 7);
        $this->ampulheta = new Ampulheta(6, 8);
    }
    
    public function testInstanciarAmpulheta()
    {
        $this->assertTrue($this->ampulheta != null);
    }

    public function testNumeros()
    {
        $this->assertTrue(
            $this->ampulheta->getAmpulheta1() > 0 &&$this->ampulheta->getAmpulheta2() > 0
        );

        $this->assertTrue(
            ($this->ampulheta->getAmpulheta1() +
             $this->ampulheta->getAmpulheta2()) >= 10
        );
    }

    public function testNumerosPodemSer3e0()
    {
        $this->assertEquals(
            $this
                ->ampulheta
                ->valores3e0SaoPossiveis(),
            1
        );
    }
}
