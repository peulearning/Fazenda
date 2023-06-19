@extends('layouts.main')

@section('title', 'IFNMG Test')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastre o seu Gado</h1>
  <form action="/animais" method="POST">
    @csrf

    <div class="form-group">
      <label for="title">Litros de Leite:</label>
      <input type="number" class="form-control" id="L_Leite" name="L_Leite" placeholder="Produção de Leite">
    </div><br>
    <div class="form-group">
      <label for="title">Kilos de Ração:</label>
      <input type="number" class="form-control" id="QTD_Racao" name="QTD_Racao" placeholder="Consumo de Ração">
    </div><br>
    <div class="form-group">
      <label for="title">Peso do Animal:</label>
      <input type="number" class="form-control" id="Peso" name="Peso" placeholder="Peso do Animal">
    </div><br>
    <div class="form-group">
        <label for="title">Data do Nascimento:</label>
        <input type="date" class="form-control" id="Data_Nasc" name="Data_Nasc" placeholder="Nascimento do Animal">
      </div><br>
     <div class="form-group">
        <label for="title">Enviar ao Abate ?</label>
        <select name="Abate" id="Abate" class="form-control">
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
      </div><br><br>
    <input type="submit" class="btn btn-primary" value="Cadastre !">
  </form>
</div>


@endsection
