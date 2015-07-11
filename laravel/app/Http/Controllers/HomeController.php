<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $titulos = [
            'Meu primeiro post' =>'Este é o primeiro post feito com o Laravel',
            'Meu segundo post'=>'Este é o segundo post feito com o Laravel',
            'Meu terceiro post' =>'Este é o terceiro post feito com o Laravel',
            'Meu quarto post' =>'Este é o quarto post feito com o Laravel',
            'Meu quinto post' => 'Este é o quinto post feito com o Laravel',
        ];
        return view('home.index', compact('titulos', 'posts'));
    }
}
