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
        $title = 'Titulo do Gabriel';

        $xss = '<script>alert("Ataque xss");</script>';
        $teste = 123;
        $teste2 = 456;
        $teste3 = 789;

        $var = '123';

        $arrayData = [];
        return view('site.home.index', compact('teste','teste2','teste3','title','xss','var','arrayData'));
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
