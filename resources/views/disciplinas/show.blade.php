@extends('layouts.master')

@section('content')

<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>
<br>
<a class="btn btn-success" role="button" href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>
@foreach ($disciplina->turmas->sortByDesc('inicio') as $turma)
    <div>
    Ministrante: {{ $turma->ministrante }}<br>
    Inicio: {{ Carbon\Carbon::parse($turma->inicio)->format('d/m/y') }}
    Fim: {{ Carbon\Carbon::parse($turma->fim)->format('d/m/y') }}
    </div>
    <br>
@endforeach

@endsection