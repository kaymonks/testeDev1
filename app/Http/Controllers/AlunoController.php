<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;
use App\Aluno;
use App\Turma;
use DateTime;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;

class AlunoController extends Controller
{
    public function index()
    {
        return view('aluno.index');
    }

    public function obtemAlunos()
    {

        $usuario = Auth::user();
        $registros = Aluno::with('turmas')->get();
        $dados = array(
            'alunos' => $registros
        );

        return response()->json($dados);

    }

    public function adicionar()
    {
        $usuario = Auth::user();
        $turmas = Turma::all();
        return view('aluno.adicionar', compact('turmas'));
    }

    public function salvar(AlunoRequest $request)
    {
        $dados = $request->all();
        
        $user_logado = $request->user()->id;

        $aluno = Aluno::create($dados);

        $aluno_id = $aluno->id;

        return redirect()->route('alunos');
    }

    public function editar($id)
    {
        $usuario = Auth::user();
        $registro = Aluno::find($id);

        $turmas = Turma::all();
        $turmaNome = Aluno::find($id)->turmas;

        return view('aluno.editar', compact('registro', 'turmas', 'turmaNome'));
    }

    public function atualizar(AlunoRequest $request, $id)
    {
        $dados = $request->all();
        // $novaData = DateTime::createFromFormat('d/m/Y', $dados['data_nascimento']);

        // $dados['data_nascimento'] = $novaData->format('Y-m-d');
        Aluno::find($id)->update($dados);
        return redirect()->route('alunos');
    }

    public function deletar($id)
    {
        Aluno::find($id)->delete();
        return redirect('alunos');
    }
}
