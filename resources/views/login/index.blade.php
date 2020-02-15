@extends('layout.login')

@section('titulo', 'Escola Rápida - Login')
@section('login', 'login-page')

@section('conteudo')

    <div class="login-box">
        <div class="login-logo" style="margin-left: -20px;">
            <img style="border-radius: 100px" src="{{ asset("/images/logo.png") }}" alt="Escola Rápida">
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body box box-solid box-default">

            <form role="form" method="post" action="{{ route('login.entrar') }}">
                {{ csrf_field() }}
                <div class="box-body">

                    <div class="form-group {{ ($errors->first('login')) ? 'has-error'  :''}}">
                        <label for="inputLogin">Login</label>
                        <input type="text" id="inputLogin" class="form-control" placeholder="Login" name="login" value="{{ old('login') }}" autofocus>
                        {!! $errors->first('login', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ ($errors->first('senha')) ? 'has-error'  :''}}">
                        <label for="inputSenha">Senha</label>
                        <input type="password" id="inputSenha" class="form-control" placeholder="Senha" name="senha">
                        {!! $errors->first('senha', '<span class="help-block">:message</span>') !!}
                    </div>

                    @if(Session::has('validaLogin'))
                        <span class="has-error help-block text-red">{{ Session::get('validaLogin') }}</span>
                    @endif

                    {{--<div class="checkbox"><label><input type="checkbox"> Lermbrar-me</label>--}}
                    {{--</div>--}}

                </div>
                <div class="box-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>

                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
@endsection
