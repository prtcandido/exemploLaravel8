<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

use App\Models\Departamento;
use App\Http\Requests\FuncionarioRequest;

class FuncionarioController extends Controller
{
    // Lista funcionários cadastrados
    public function index()
    {
        // Obtém parâmetro da requisição
        $departamento_id = \Request::input('departamento_id');

        // busca dois usuários por vez no BD
        if (!empty($departamento_id))
        {
            $d = Departamento::find($departamento_id);
            $funcionarios = $d->funcionarios()->paginate(2);
            //$funcionarios = Funcionario::where('departamento_id','=',$departamento_id)->paginate(2);
        } 
        else
        {
            $funcionarios = Funcionario::paginate(2);
        }
        // Aciona View, passando a ela coleção dos funcionários obtidos no BD   
        return View('funcionario.index')->with('funcionarios',$funcionarios); 
    }

    // Aciona a view que envia ao usuário o formulário para cadastro ne novo funcionário
    public function create()
    {
        return View('funcionario.create')->with('cDepartamentos',Departamento::all());
    }

    // Valida os dados digitados pelo usuário no formulário e, se corretos, cria novo funcionário no BD
    // Dados digitados são obtidos no parâmetro objeto $request 
    public function store(FuncionarioRequest $request)
    {
        // Cria funcionário no BD
        Funcionario::create($request->all()); // ['nome'=>'Ana Lucia','endereco'=>'rua K,33', 'departamento_id'=>2]
        // Redireciona para view que lista os funcionários cadastrados
        return redirect('/funcionario');
    }

    // Aciona view que apresenta os dados do funcionário conforme $id
    public function show($id)
    {
        return View('funcionario.show')->with('funcionario',Funcionario::find($id));
    }

    // Aciona view que envia ao usuário formulário preenchido com os dados do funcionário conforme $id
    public function edit($id)
    {
        return View('funcionario.edit')->with('funcionario',Funcionario::find($id))->with('cDepartamentos',Departamento::all());   
    }

    // Valida os dados alrerados pelo usuário (edição) e, se ok, atualiza funcionário no BD 
    public function update(FuncionarioRequest $request, $id)
    {
        $funcionario = Funcionario::find($id);  // recupera funcionário do BD
        $funcionario->update($request->all());  // atualiza (grava) novos dados do funcionário
        return redirect('/funcionario');
    }

    // Exclui funcionário conforme $id
    public function destroy($id)
    {
        Funcionario::destroy($id);
        return redirect('/funcionario');
    }

}
