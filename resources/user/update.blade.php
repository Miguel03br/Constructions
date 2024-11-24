@extends('master')


@section('content')


<div class="modal-body">
  <div class="container-fluid">
  <h2>Editando funcionário</h2>
    
  <form action="{{ Route('UserController.update', ['users => $Users->id'])}}" method="POST">
        @csrf

        <h3>Nome:</h3>
        <div class="input-group mb-3">
            <input type="text" id="nome" class="form-control" aria-label="Text input with dropdown button" value="{{ $user->nome }}">
        </div>

        <h3>Idade:</h3>
        <div class="input-group mb-3">
            <input type="number" id="idade" class="form-control" aria-label="Text input with dropdown button" value="{{ $user->nome }}">
        </div>

        <h3>Email:</h3>
        <div class="input-group mb-3">
            <input type="text" id="email" class="form-control" value="{{ $user->email }}" aria-label="Text input with dropdown button" value="{{ $user->email }}">
        </div>

        <h3>Senha:</h3>
        <div class="input-group mb-3">
            <input type="text" id="senha" class="form-control" aria-label="Text input with dropdown button" value="{{ $user->senha }}">
        </div>

        @if($nome == null)

          <p>preencha o campo nome</p>

        @elseif($idade == null)

          <p>preencha o campo email</p>

        @elseif($email == null)

          <p>preencha o campo email</p>

        @elseif($senha == null)

          <p>preencha o campo senha</p>

        @endif

        <button type="button" class="btn btn-success">Editar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>

    </form>
    
    
  </div>
</div>
<button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Adicionar</button>

@endsection