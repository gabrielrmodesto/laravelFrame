<?php

namespace App\Http\Controllers\Painel;

use App\Models\Painel\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto){
        $this->produto = $produto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->produto->all();
        return view('painel.produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tests(){
//        $prod = $this->produto;
//        $prod->name = 'Nome do produto';
//        $prod->number = 1231;
//        $prod->active = true;
//        $prod->category = 'eletronicos';
//        $prod->description = 'Desrcription do produto';
//        $insert = $prod->save();
//
//        if($insert)
//            return "Produto inserido";
//        else
//            return "Produto not insert";
//        $insert = $this->produto->create([
//                                            'name' => 'Nome do produto 5',
//                                            'number' => 11,
//                                            'active' => false,
//                                            'category' => 'eletronicos',
//                                            'description' => 'Desrcription do produto',
//                                        ]);
//
//        if($insert)
//            return "Produto inserido, ID {$insert->id} e Nome {$insert->name}";
//        else
//            return "Produto not insert";

//        $prod = $this->produto->find(5);
//        $prod->name = 'Update';
//        $prod->number = 12;
//        $prod->active = true;
//        $prod->category = 'Domestico';
//        $prod->description = 'Desc Update';
//        $update = $prod->save();
//
//        if($update)
//            return "Alterado com sucesso";
//        else
//            return "Não alterado";


        $prod = $this->produto->find(4);
        $update = $prod->update([
                                  'name' => 'Produto 6',
                                  'number' => 320,
                                  'active' => true,
                                ]);
        if($update)
            return "Alterado com sucesso";
        else
            return "Não alterado";
    }
}
