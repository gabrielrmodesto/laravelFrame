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
        return view('initial', ['teste' => $teste]);
    }
    public function contato(){
        return "Page Contato";
    }
    public function categoria($id){
        return "Lista de contato: {$id}";
    }
    public function categoriaOp($id = " "){
        return "Lista de categoria: {$id}";
    }
}
