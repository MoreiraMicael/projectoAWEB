@extends('template')

@section('titulo', 'Adicionar Novo Utilizador')

@section('corpo')
      <form class="" action="/rota2" method="post">
        
        @csrf

        <div class="form-group">
          <label for="inputFullName">Nome</label>
          <input type="text" name="nome" id="inputFullName" class="form-control" value="" placeholder="Nome Completo">
          @if ( $errors->has('nome') )
            <div>
              {{ $errors->first('nome') }}
            </div>
          @endif
        </div>

        <div class="form-group">
          <label for="inputType">Serviço de Saúde</label>
          <select name="type" id="inputType" class="form-control">
            <option disabled selected> - - escolha um - - </option>
            <option value="sns">SNS</option>
            <option value="sps">SPS</option>
            <option value="adse">ADSE</option>
          </select>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Sexo</div>
          <div class="panel-body">
            <div class="radio">
              <label>
                <input type="radio" name="gender" id="inputGenderMale" value="m" />
                Feminino
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="gender" id="inputGenderFemale" value="f" />
                Masculino
              </label>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Histórico</div>
          <div class="panel-body">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="hist[]" id="inputHAS" value="HAS">
                Hipertensão Arterial Sistêmica
              </input>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="hist[]" id="inputDM" value="DM">
                Diabetes Melitus
              </input>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="hist[]" id="inputTab" value="tab">
                Tabagismo
              </input>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="hist[]" id="inputAlc" vale="alc">
                Alcoolismo
              </input>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        <button type="reset" class="btn">Limpar</button>
      </form>
@endsection