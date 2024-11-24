@extends('master')


@section('content')


<div class="modal-body">
  <div class="container-fluid">
  <h2>Adicione uma construção</h2>
    
  <form action="{{ Route('AvisoController.create')}}" method="POST">
        @csrf

        <h3>Adicionar aviso para a empresa:</h3>
        <div class="input-group mb-3">
            <input type="text" name="nome" class="form-control" aria-label="Text input with dropdown button">
        </div>

        <h3>Data:</h3>
        <div class="input-group mb-3">
            <input type="date" name="data" class="form-control" aria-label="Text input with dropdown button">
        </div>

        <button type="button" class="btn btn-success">Adicionar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>

    </form>
    
    
  </div>
</div>

@endsection