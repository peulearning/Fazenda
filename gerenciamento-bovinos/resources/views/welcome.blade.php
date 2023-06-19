@extends('layouts.main')

@section('title', 'Pedro Test')

@section('content')

<div id="search-container" class="col-md-12">
    <h1> Busque seu Gado </h1>
    <form action="/" method="GET">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Visualize os Gados</h2>
    <p>Veja os Gados Abatidos e os Vivos</p>
    <div id="cards-bovinos" class="row">
    @foreach($animals as $animal)
    <div class="card col-md-3">
    <img src="/img/bovinos.jpg" alt="Atributo aqui dentro">
    </div>
    <div class="card-body">
        <p class="card-date">16/04/2023</p>
        <h5 class="card-title">{{ $animal -> Abate }}</h5>
    @endforeach
</div>

@endsection
