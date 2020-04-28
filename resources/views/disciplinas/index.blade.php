

<ul>
@foreach ($disciplinas as $disciplina)
    <li>
        <a href="/disciplinas/{{ $disciplina->id }}">
        {{ $disciplina->titulo }}
        </a><a href="/disciplinas/{{ $disciplina->id }}/edit"> Editar </a>
    </li></a>
@endforeach

    <a class="btn btn-primary" href="/disciplinas/create" role="button">Cadastrar Nova Disciplina</a>
</ul>