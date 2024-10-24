<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alerta extends Component
{
    public $tipo;

    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    public function render()
    {
        return view('components.alerta');
    }
}
