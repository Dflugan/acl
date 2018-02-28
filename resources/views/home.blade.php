@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Lista de chamados</h2>

        @forelse($chamados as $key => $value)

          <p>{{$value->titulo}}
              @can('ver-chamado', $value)
                  <a href="/home/{{$value->id}}">Editar</a> </p>
              @endcan
        @empty
          <p>Nenhum chamado</p>

        @endforelse
    </div>
</div>
@endsection
