@extends('layout')

@section('title', 'Detalhes da editora')

@section('page-header-content', 'Detalhes da editora')

@section('content')
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">

            <div class="panel-heading"><strong>Editora</strong></div>

            <ul class="list-group">
              <li class="list-group-item">{{ $editora->nome }}</li>
              <li class="list-group-item">{{ $editora->email }}</li>
            </ul>
          </div>
        </div>
      </div>
@endsection
