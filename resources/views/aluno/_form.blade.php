@if(isset($errors) and count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<div class="col-md-12">
    <legend>Dados pessoais</legend>
    <div class="form-group">
        <label for="inputNome" class="col-sm-4 control-label">Nome</label>
        <div class="col-sm-8 col-md-5">
            <input type="text" name="nome" placeholder="Nome" class="form-control" id="inputNome" value="{{isset($registro->nome) ? $registro->nome : old('nome') }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Selecione a Turma</label>
        <div class="col-sm-4 col-md-2">
            <select name="turma_id" class="form-control select2 select2-hidden-accessible" data-placeholder="Selecione a turma" style="width: 100%" aria-hidden="true" tabindex="-1">
                @foreach($turmas as $turma)
                    <option value="{{ $turma->id }}"  @if(isset($turmaNome) and $turma->id==$turmaNome->id) selected @endif >{{ $turma->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Sexo</label>
        <div class="col-sm-2">
            <div class="radio">
                <label>
                    <input type="radio" name="sexo" value="m" @if(isset($registro) and ($registro->sexo == 'm')) checked @else {{ old('sexo')=="m" ? 'checked' : '' }} @endif > Masculino&nbsp;
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="sexo" value="f" @if(isset($registro) and $registro->sexo == 'f') checked @else {{ old('sexo')=="f" ? 'checked' : '' }} @endif > Feminino
                </label>
            </div>
        </div>
    </div>
</div>