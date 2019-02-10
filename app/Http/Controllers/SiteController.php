<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
