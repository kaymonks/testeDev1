@extends('layout.site')

@section('titulo', 'Listar Alunos')
@section('script')
    <script type="text/javascript" src="{{asset('/js/aluno.js')}}"></script>
@endsection

@section('conteudo')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Alunos
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Alunos</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="table-responsive table-container" style="display: none; margin: 10px;">
                            <table class="table table-hover table-bordered" id="tabelaAluno">
                                <thead>
                                    <tr>
                                        <th>Aluno</th>
                                        <th>Turma</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a class="btn btn-success" href="{{ route('aluno.adicionar') }}"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar aluno</a>
                </div>
            </div>
        </section>
    </div>
@endsection
