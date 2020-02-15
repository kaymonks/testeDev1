@if(isset($errors) and count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<div class="col-md-12">
        <div class="form-group">
            <label style="text-align:left" for="inputAno" class="col-sm-1 control-label">Turma</label>
            <div class="col-md-5">
                <input type="text" name="nome" placeholder="Nome" class="form-control" id="inputAno" value="{{isset($turmas->nome) ? $turmas->nome : old('nome')}}">
            </div>
        </div>
</div>
