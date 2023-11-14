<?php
use Dev\GestionGym\Carree;
use PHPUnit\Framework\TestCase;
use Exception;

class CarreeTest extends TestCase
{

    public function testSurface()
    {
        $objet = new Carree(10);
        $this->assertEquals(100, $objet->surface());
    }

    public function testSetCote()
    {
        $this->expectException(Exception::class);
        $objet = new Carree(-23);
    }
}