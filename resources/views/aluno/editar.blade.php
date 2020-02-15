@extends('layout.site')

@section('titulo', 'Editar Aluno')

@section('conteudo')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Alunos</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('alunos') }}"> Alunos</a></li>
                <li class="active">Editar</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h2 class="box-title">Editar Aluno</h2>
                    <a class="btn btn-danger btn-sm excluirRegistro pull-right"  href="{{ route('aluno.deletar',$registro->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Excluir</a>
                </div>
                <form class="form-horizontal" method="post" action="{{ route('aluno.atualizar', $registro->id) }}" enctype="multipart/form-data">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        @include('aluno._form')
                    </div>
                    <div class="box-footer">
                        <a href="javascript:history.back()" class="btn btn-default"><i class="fa fa-backward"></i>&nbsp;Voltar</a>
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-floppy-o "></i> Atualizar</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
