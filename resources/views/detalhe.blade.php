@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @can('view', $chamados)
            <h2>Detalhe de chamados</h2>
            <p>{{$chamados->titulo}}<a href="/home/{{$chamados->id}}">Editar</a>
        @endcan
        @can('delete', $chamados)
            <a href="/home/{{$chamados->id}}">Deletar</a>
            </p>
        @else
            <h2>Não há chamado</h2>
        @endcan


    </div>
</div>
@endsection
