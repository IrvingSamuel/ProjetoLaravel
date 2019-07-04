@extends('./layouts/app')

 @section('content')
 <div class="container">
 <h1>Alunos</h1>
 <a href="{{ route('alunos.create') }}" class="btn btn-default">Cadastrar Aluno </a>

 <table class="table table-striped table-bordered table-hover">
 <thead>
 <tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Matricula</th>
 <th>Curso</th>
 <th></th>
 </tr>
 </thead>
 <tbody>

 @foreach($alunos as $aluno)

 <tr>
 <td>{{ $aluno->id }}</td>
 <td>{{ $aluno->nome }}</td>
 <td>{{ $aluno->matricula }}</td>
 <td>{{ $aluno->curso }}</td>
 <td>
 <a href="{{ route('alunos.edit',['id'=>$aluno->id]) }}" class="btn-sm btn-success">Editar</a>
 <a href="{{ route('alunos.destroy',['id'=>$aluno->id]) }}" class="btn-sm btn-danger">Remover</a>
 </td>
 </tr>
 @endforeach

</tbody>
</table>
</div>
@endsection


