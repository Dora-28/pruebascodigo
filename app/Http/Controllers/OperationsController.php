<?php

namespace App\Http\Controllers;

// Si tu clase base Controller está en esta misma carpeta, no necesitas el 'use',
// pero si te da un error de "Class Controller not found", descomenta la siguiente línea:

class OperationsController extends Controller
{
    public function addition(int $a, int $b): int
    {
        return $a + $b;
    }
}
