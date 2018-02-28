@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @can('ver-chamado', $chamados)
        <h2>Detalhe de chamados</h2>

          <p>{{$chamados->titulo}}</p>
            @else
            <h2>Você não tem permissão para esse registro!!</h2>
        @endcan
    </div>
</div>
@endsection
