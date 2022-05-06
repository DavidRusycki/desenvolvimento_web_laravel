@extends('Layout')

@section('titulo')
    Listagem de Categorias
@stop

@section('conteudo')

@foreach($aCategorias as $oCategoria)

{{$oCategoria->NomeCategoria}}

@endforeach

@stop