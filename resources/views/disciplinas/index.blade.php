

<ul>
@foreach ($disciplinas as $disciplina)
    <li>
        <a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a><br>
        <a href="/disciplinas/{{ $disciplina->id }}/edit">Editar</a>
    </li>
    <br>
    <form method="POST" action="/disciplinas/{{ $disciplina->id }}">
        {{ csrf_field() }} 
        {{ method_field('delete') }}
        <button type="submit">Apagar</button>
    </form>

@endforeach
</ul>
<p>
    <a class="btn btn-primary" href="/disciplinas/create" role="button">Cadastrar Nova Disciplina</a>
</p>