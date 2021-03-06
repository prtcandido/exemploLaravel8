<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use App\Http\Requests\DepartamentoRequest;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::paginate(3); //Departamento::all();
        return View('departamento.index')->with('nomeVarView',$departamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('departamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoRequest $request)
    {
        //var_dump(   $request->all()   );

        // $this->validate($request,
        // [
        //     'nome' => 'required|max:50',
        //     'sigla' => 'required|max:3' 
        // ],
        // [
        //     'nome.required' => 'Nome é obrigatório',
        //     'nome.max' => 'Nome máximo 50',
        //     'sigla.*' => 'Sigla é obrigatória com no máximo 3 caracteres'
        // ]);

        Departamento::create( $request->all() );

        return redirect("/departamento");

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        return View('departamento.edit')->with('dep',$departamento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(DepartamentoRequest $request, Departamento $departamento)
    {
        // $this->validate($request,
        // [
        //     'nome' => 'required|max:50',
        //     'sigla' => 'required|max:3' 
        // ],
        // [
        //     'nome.required' => 'Nome é obrigatório',
        //     'nome.max' => 'Nome máximo 50',
        //     'sigla.*' => 'Sigla é obrigatória com no máximo 3 caracteres'
        // ]);

        $departamento->update(  $request->all()  );

        return redirect('/departamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        return View('departamento.show')->with('dep',$departamento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();

        return redirect('/departamento');
    }
}
