@extends('layout')

@section('title', 'Listagem das editoras')

@section('page-header-content', 'Listagem das editoras')

@section('content')


      <div class="row">

        <div class="col-md-6">

          <div class="panel panel-primary">

            <div class="panel-heading">Editoras</div>

            <table class="table table-striped">

              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>#</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($editoras as $editora)
                <tr>
                  <td>
                      {{$editora->id}}
                  </td>
                  <td>
                    {{$editora->nome}}
                  </td>
                  <td>
                     {{$editora->email}}
                  </td>
                  <td>
                    <a href="/editoras/{{ $editora->id }}">Detalhes</a>
                  </td>
              </tr>
              @endforeach
            </tbody>
            </table>

        </div>

        </div>

      </div>
@endsection
