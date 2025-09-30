<?php

use PHPUnit\Framework\TestCase;
use App\Hola;

class HolaTest extends TestCase {
    public function testDecirHolaMundo() {
        $hola = new Hola();
        $this->assertEquals("Hola Mundo", $hola->decir());
    }
}
