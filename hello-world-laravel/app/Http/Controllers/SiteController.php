<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $numero = 50;
    
        $url = 'https://i.pravatar.cc/150?img='.$numero;
    
        $dados = [
            'url' => $url,
            'numero' => $numero,
        ];
    
        return view('bemvindo', $dados);
    }
    
    public function index2(){
        return view('include');
    }

    public function components(){
        return view ('comp');
    }



}
