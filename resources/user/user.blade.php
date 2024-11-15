@extends('master')


@section('content')


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <img src="{{asset('images/user.png')}}" alt="" width="60px" height="60px" style="border-radius: 50%;">
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ConstruControl</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Construções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Funcinários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Avisos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Andamentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Relatórios</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="modal-body">
  <div class="container-fluid">
  <h2>Adicione um funcionário</h2>
    
    <form action="" method="GET">
        @csrf

        <h3>Nome de usuário:</h3>
        <div class="input-group mb-3">
            <input type="text" id="nome" class="form-control" aria-label="Text input with dropdown button">
        </div>

        <h3>E-mail:</h3>
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
        <button type="button" class="btn btn-danger">cancelar</button>

    </form>
    
    
  </div>
</div>
<button class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Adicionar</button>


<table class="table " style="margin-top: 10%;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($constructions as $Construction)
    <tr>
      <th scope="row">{{$Construction->id}}</th>
      <td>
        
        {{$Construction->nome}}
        

        
      </td>
       
      <td>

        {{$Construction->email}}

      </td>

        {{$Construction->senha}}
  
      <td>

        <form action="/views/$user->id" method="POST">
          <button type="button" class="btn btn-danger">Deletar</button>
        </form>
        
        <button type="button" href="/views/update/{{ $user->id }}" class="btn btn-warning">Editar</button>
      
    </td>
    </tr>
  @endforeach
  </tbody>
</table>

    

<ul>
    
</ul>


@endsection