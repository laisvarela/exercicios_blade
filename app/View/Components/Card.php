<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $imagem;
    public $titulo;
    public $descricao;

    public function __construct($imagem, $titulo, $descricao)
    {
        $this->imagem = $imagem;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }

    public function render()
    {
        return view('components.card');
    }
}
