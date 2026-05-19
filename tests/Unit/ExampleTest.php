<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
// 1. IMPORTANTE: Ajusta esta ruta a donde esté realmente tu controlador
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_addition_result(): void
    {
        // Instanciamos el controlador
        $controller = new OperationsController;
        $result = $controller->addition(4, 9);
        $this->assertIsInt($result);
        $this->assertNotNull($result);
        $this->assertEquals(13, $result);
        $this->assertGreaterThan(0, $result);
    }
}
