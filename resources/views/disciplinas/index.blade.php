<ul>
@foreach ($disciplinas as $disciplina)
    <li>
        <a href="/disciplinas/{{ $disciplina->id }}">
        {{ $disciplina->titulo }}
        </a>
    </li></a>
@endforeach

</ul>