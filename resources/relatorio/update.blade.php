@extends('master')


@section('content')


<div class="modal-body">
  <div class="container-fluid">
  <h2>Adicione uma construção</h2>
    
  <form action="{{ Route('RelatorioController.update', ['relatorios => $Relatorio->id'])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <h3>Aviso:</h3>
        <div class="input-group mb-3">
            <input type="text" name="nome" value="{{$Relatorio->relatorio}}" class="form-control" aria-label="Text input with dropdown button">
        </div>

        <button type="button" class="btn btn-success">Adicionar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>

    </form>
    
    
  </div>
</div>
<button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Adicionar</button>

@endsection