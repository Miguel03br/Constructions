@extends('master')


@section('content')


<div class="modal-body">
  <div class="container-fluid">
  <h2>Adicione um funcinário</h2>
    
  <form action="" method="GET">
        @csrf

        <h3>Nome:</h3>
        <div class="input-group mb-3">
            <input type="text" id="nome" class="form-control" aria-label="Text input with dropdown button">
        </div>

        <h3>Email:</h3>
        <div class="input-group mb-3">
            <input type="text" id="email" class="form-control" aria-label="Text input with dropdown button">
        </div>

        <h3>Senha:</h3>
        <div class="input-group mb-3">
            <input type="text" id="senha" class="form-control" aria-label="Text input with dropdown button">
        </div>

        @if($nome == null)

          <p>preencha o campo nome</p>

        @elseif($email == null)

          <p>preencha o campo email</p>

        @elseif($senha == null)

          <p>preencha o campo senha</p>

        @endif

        <button type="button" class="btn btn-success">Adicionar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>

    </form>
    
    
  </div>
</div>
<button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Adicionar</button>

@endsection