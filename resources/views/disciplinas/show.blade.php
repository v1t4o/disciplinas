<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>
<br>
<a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>