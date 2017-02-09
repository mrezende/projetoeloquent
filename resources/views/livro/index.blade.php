@extends('layout')

@section('title', 'Livros')
@section('page-header-content', 'Livros')

@section('content')

  <div class="row">

    <div class="col-md-6">

      <div class="panel panel-primary">

        <div class="panel-heading">
          Livros
        </div>

        <table class="table table-striped">

          <thead>
            <tr>
              <th>Id</th>
              <th>Título</th>
              <th>Preço</th>
              <th>Editora</th>
              <th>#</th>
            </tr>
          </thead>

            @foreach($livros as $livro)

              <tr>
                <td>{{ $livro->id }}</td>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->preco }}</td>
                <td>{{ $livro->editora->nome }}</td>
                <td><a href="/livros/{{ $livro->id }}">Detalhes</a></td>
              </tr>

            @endforeach

          <tbody>

          </tbody>

        </table>

      </div>

    </div>

  </div>

@endsection
