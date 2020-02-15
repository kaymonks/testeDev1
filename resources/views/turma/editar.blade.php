@extends('layout.site')

@section('titulo', 'Editar Turma')

@section('conteudo')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Turmas</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('turmas') }}"> Turmas</a></li>
                <li class="active">Editar</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Turma</h3>
                    <a class="btn btn-danger btn-sm excluirRegistro pull-right"  href="{{ route('turma.deletar',$turmas->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</a>
                </div>
                <form class="form-horizontal" method="post" action="{{ route('turma.atualizar', $turmas->id) }}" enctype="multipart/form-data">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        @include('turma._form')
                        <!-- <a class="btn btn-primary btn-sm pull-right" href="{{ route('turma.alunos', $turmas->id) }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Alunos</a> -->
                        <div class="box-body">
                            <table class="table table-hover table-bordered table-aluno">
                                <thead>
                                <tr>
                                    <th colspan="3">Alunos</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0 ?>
                                @foreach($dados as $registro)
                                    <tr onclick=window.location='/aluno/editar/{{$registro->id}}' data-toggle="collapse" data-target="#accordion{{$i}}" class="clickable" role="button">
                                        <td width="5">{{$registro->id}}</td>
                                        <td>{{ $registro->nome }}</td>
                                        <td width="50">@if($registro->sexo == 'm') Masculino @else Feminino @endif</td>
                                    </tr>
                                    <?php $i++ ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-floppy-o "></i> Atualizar</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
