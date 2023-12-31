@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" required>
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" required>
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Description:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" required></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Cadeiras" checked> Cadeiras
                </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
                </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Open Food"> Open food
                </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>
                
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>
    
@endsection