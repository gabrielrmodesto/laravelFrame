<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct(){
//      $this->middleware('auth');
//        $this->middleware('auth')
//             ->only([
//                    'contato',
//                    'categoria'
//             ]);
        $this->middleware('auth')
                        ->except([
                            'index',
                            'contato'
                        ]);
    }

    public function index(){
        $teste = 123;
        $teste2 = 456;
        $teste3 = 789;
        return view('site.home.index', compact('teste','teste2','teste3'));
    }
    public function contato(){
        return view('site.contato.index');
    }
    public function categoria($id){
        return "Lista de contato: {$id}";
    }
    public function categoriaOp($id = " "){
        return "Lista de categoria: {$id}";
    }
}
