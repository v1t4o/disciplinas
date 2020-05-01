@extends('layouts.master')

<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>
<br>

@foreach ($disciplina->turmas as $turma)
    Ministrante: {{ $turma->ministrante }}<br>
    Inicio: {{ $turma->inicio }}
    <br><br>
@endforeach

<br>
<a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>