@extends('./layouts/app')
@section('content')
<div class="container">
    <h1>Editar Aluno: {{$aluno->name}}</h1>
    @if ($errors->any())
    <ul class="alert alert-warning">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif

    {!! Form::open(['url'=>"alunos/$aluno->id/update", 'method'=>'put'])!!}

    <!-- Nome Form Input -->

    <div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', $aluno->nome, ['class'=>'form-control']) !!}
    </div>

    <!-- Descricao Form Input -->

    <div class="form-group">
            {!! Form::label('matricula', 'Matricula:') !!}
            {!! Form::text('matricula', $aluno->matricula, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('curso', 'Curso:') !!}
            {!! Form::text('curso', $aluno->curso, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

 </div>
@endsection