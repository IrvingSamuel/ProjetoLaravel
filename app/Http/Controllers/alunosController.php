<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aluno;
use Collective\Html\HtmlServiceProvider;
use App\Http\Requests\AlunosRequest;

class alunosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $alunos = aluno::all();

        return view('alunos.alunos',['alunos'=>$alunos]);
    }
    public function create(){
        return view('alunos.create');
    }
    public function store(AlunosRequest $request){

        $input = $request->all();
        aluno::create($input);
        return redirect()->route('alunos');
    }
    public function destroy($id){

        aluno::find($id)->delete();

        return redirect('alunos');
    }
    public function edit($id){

        $aluno = aluno::find($id);
        return view('alunos.edit', compact('aluno'));
    }
    public function update(AlunosRequest $request, $id){
        $aluno = aluno::find($id)->update($request->all());

        return redirect()->route('alunos');
    }
}