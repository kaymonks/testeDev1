@extends('layout.site')

@section('titulo', 'Adicionar Turma')

@section('conteudo')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Turmas</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('turmas') }}"> Turmas</a></li>
                <li class="active">Adicionar</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Adicionar Turma</h3>
                </div>
                <form class="form-horizontal" method="post" action="{{ route('turma.salvar') }}">
                    <div class="box-body">
                        {{ csrf_field() }}
                        @include('turma._form')
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o "></i> Salvar</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
