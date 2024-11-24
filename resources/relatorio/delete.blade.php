@extends('master')


@section('content')

    <form action="{{Route('RelatorioController.destroy', ['relatorios' => $Relatorio->id])}}" method="POST">

        @csrf
        <input type="hidden" name="_method" value="DELETE">

        <button type="submit">Deletar</button>

    </form>

@endsection