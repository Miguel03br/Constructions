@extends('master')


@section('content')


<div class="modal-body">
  <div class="container-fluid">
  <h2>Adicione um relatório</h2>
    
    <form action="{{ Route('RelatorioController.create')}}" method="POST">
        @csrf

        <h3>Aviso:</h3>
        <div class="input-group mb-3">
            <input type="text" name="relatorio" class="form-control" aria-label="Text input with dropdown button">
        </div>

        <button type="button" class="btn btn-success">Adicionar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>

    </form>
    
    
  </div>
</div>

@endsection