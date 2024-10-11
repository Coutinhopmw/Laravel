<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $data = [
            'apelido_nome' =>  'Cássio', 
            'html' => '<b style = "color: red ">Negrito</b>'
        ];
        return view('bemvindo', $data);
    }
}
