@extends('layout.site')

@section('titulo', 'Listar Turmas')
@section('script')
    <script type="text/javascript" src="{{asset('/js/turma.js')}}"></script>
@endsection

@section('conteudo')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 455px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Turmas
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Turmas</li>
            </ol>
        </section>
        <section class="content">
            @if(session('success'))
                <div class="alert bg-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="table-responsive table-container"  style="display: none; margin: 10px;">
                            <table class="table table-hover table-bordered" id="tabelaTurma">
                                <thead>
                                    <tr>
                                        <th>Turma</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a class="btn btn-success" href="{{ route('turma.adicionar') }}"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar turma</a>
                </div>
            </div>
        </section>
    </div>
@endsection
