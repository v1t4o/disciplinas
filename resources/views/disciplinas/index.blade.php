@extends('layouts.master')

@section('content')

<p>
    <a class="btn btn-success" href="/disciplinas/create" role="button">Cadastrar Nova Disciplina</a>
</p>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome da Disciplina</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($disciplinas as $disciplina)
        <tr>
            <td><a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a><br></td>
            <td><a href="/disciplinas/{{ $disciplina->id }}/edit">Editar</a></td>
            <td>
                <form method="POST" action="/disciplinas/{{ $disciplina->id }}">
                    {{ csrf_field() }} 
                    {{ method_field('delete') }}
                    <button type="submit">Apagar</button>
                </form>
            </td>

    @endforeach
</table>
@endsection