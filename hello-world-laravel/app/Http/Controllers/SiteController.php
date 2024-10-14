<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29,  
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'José',
                'birth' => '20/08/76',
                'idade' => 29,  
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '10/04/99',
                'idade' => 29,  
            ]
        ];

        $dados['pessoas'] = $pessoas;

        return view('bemvindo',$dados);
    }
}
