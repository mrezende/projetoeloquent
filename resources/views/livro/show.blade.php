@extends('layout')

@section('title', 'Detalhes do livro')
@section('page-header-content', 'Livro')

@section('content')

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">Livros</div>
        <ul class="list-group">
          <li class="list-group-item">{{ $livro->titulo }}</li>
          <li class="list-group-item">{{ $livro->preco }}</li>
          <li class="list-group-item">{{ $livro->editora->nome }}</li>
          <li class="list-group-item">{{ $livro->editora->email }}</li>
        </ul>
      </div>
    </div>
  </div>

  

@endsection
