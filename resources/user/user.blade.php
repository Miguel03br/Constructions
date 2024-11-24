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
    <h1 class="navbar-brand" href="#" style="color:white;">Construções</h1>
    <img src="{{asset('images/user.png')}}" alt="" width="60px" height="60px" style="border-radius: 50%;">
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">ConstruControl</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{constructions.blade.php}}">Construções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{user/user.blade.php}}">Funcinários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{aviso/aviso.blade.php}}">Avisos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{relatorio/relatorio.blade.php}}">Relatórios</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<table class="table " style="margin-top: 10%;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Email</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($Users as $user)
    <tr>
      <th scope="row">{{$Construction->id}}</th>
      <td>
        
        {{$user->nome}}
        
      </td>

      <td>
        
        {{$user->idade}}
        
      </td>
       
      <td>

        {{$user->email}}

      </td>
  
      <td>
        <a type="button" href="/user/delete.blade.php" class="btn btn-danger">Deletar</a>
        <a type="button" href="/user/update.blade.php" class="btn btn-warning">Editar</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

<a type="button" href="/user/create.blade.php" class="btn btn-danger">Adicionar</a>

@if(session()->has('message'))

  {{session()->get('message')}}

@endif

@endsection