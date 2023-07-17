@extends('layouts.main')

@section('title', 'Products')

@section('content')

    <h1>Tela de produtos</h1>
    @if($busca != '')
     <p>O usuário está buscando por: {{ $busca }}</p>
    @endif
    <img src="/img/banner.jpg" alt="Banner">
    
@endsection
