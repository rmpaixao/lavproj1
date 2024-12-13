<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Matheus";
        $idade = 28;
        $profissao = "Programador";
        return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao]);
    }

    public function create(){
        return view('events.create');
    }
}
