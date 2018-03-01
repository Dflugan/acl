@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Lista de chamados</h2>

        @can('create', App\Chamado::class)
            <a href="/home/">Novo chamado</a>
        @endcan

        @forelse($chamados as $key => $value)
          <p>{{$value->titulo}}
            @can('view', $value)
                <a href="/home/{{$value->id}}">Editar</a>
            @endcan
            @can('delete', $value)
                <a href="/home/{{$value->id}}">Deletar</a>
            @endcan
          </p>
        @empty

          <p>Nenhum chamado</p>

        @endforelse
    </div>
</div>
@endsection
