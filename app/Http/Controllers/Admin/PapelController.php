<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Papel;

class PapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caminhos = [
            ['url'=>'/admin', 'titulo'=>'Admin'],
            ['url'=>'', 'titulo'=>'Papeis']
        ];
        $registros = Papel::all();
        return view('admin.papel.index',compact('caminhos','registros'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('papeis.index'),'titulo'=>'Papeis'],
            ['url'=>'','titulo'=>'Adicionar']
        ];
        return view('admin.papel.adicionar', compact('caminhos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {   
        try {
        $dados = $req->all();
        Papel::create($dados);
        return redirect()->route('papeis.index');

        } catch (Exception $e) {
            echo "Erro: ", $e->getMessage();    
        }
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
        try {
            
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admim'],
            ['url'=>route('papeis.index'),'titulo'=>'Papeis'],
            ['url'=>'','titulo'=>'Editar'],
        ];
        $registro = Papel::find($id);
        if ($registro['nome'] == 'Admin') {
            return redirect()->route('papeis.index');
        }        
        return view('admin.papel.editar', compact('caminhos','registro'));

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        try {

        $dados = $req->all();
        if ($dados['nome'] == 'Admin') {
            return redirect()->route('papeis.index');
        }
        Papel::find($id)->update($dados);
        return redirect()->route('papeis.index');
            
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $registro = Papel::find($id);
        if ($registro['nome'] == 'Admin') {
               return redirect()->route('papeis.index');
           }
        Papel::find($id)->delete();
        return redirect()->route('papeis.index');

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
