@extends('layout.app')
@section('title', $title)
@section('content')
    <h1>{{ $cabecalho }}</h1>
    <a href="mailto:sandroaf@unidavi.edu.br">Sandro</a>
    <br>
    <p>Nome Script: {{ $script }} executado em {{ $data }}</p>
    <hr>
    <p>Obrigado por visitar: {{ $title }} - {{ $cabecalho }}</p>
    <br>
    <a href="/">Voltar a Home</a>
@endsection

