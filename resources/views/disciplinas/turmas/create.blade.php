@extends('layouts.master')

@section('content')

<form method="POST" action="/disciplinas/{{ $disciplina_id }}/turmas">
    {{ csrf_field() }}

    Ministrante: <input name="ministrante">

    Data início: <input class="datepicker" name="inicio" autocomplete="off">

    Data fim: <input class="datepicker" name="fim" autocomplete="off">

    Bibliografia: <textarea name="bibliografia"></textarea>

    <button type="submit" class="btn btn-success"> Salvar </button>
</form>

@endsection