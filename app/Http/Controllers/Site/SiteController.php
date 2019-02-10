<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        return 'Home Page do Site';
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
