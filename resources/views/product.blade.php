@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id != null)
        <h1>Tela de produtos com id: {{ $id }}</h1>
    @endif

    <img src="/img/banner.jpg" alt="Banner">
    
@endsection