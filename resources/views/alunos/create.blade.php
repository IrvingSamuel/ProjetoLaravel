@extends('./layouts/app')
@section('content')
    <div class="container">
    @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
        <h1>Aluno</h1>

        {!! Form::open(['url'=>'alunos/store']) !!}


        <!-- Nome Form Input -->
        
         <div class="form-group">
         {!! Form::label('nome', 'Nome:') !!}
         {!! Form::text('nome', null, ['class'=>'form-control']) !!}
         </div>
        
         <!-- Descricao Form Input -->
        
         <div class="form-group">
         {!! Form::label('matricula', 'Matricula:') !!}
         {!! Form::text('matricula', null, ['class'=>'form-control']) !!}
        </div>
    
        <div class="form-group">
         {!! Form::label('curso', 'curso:') !!}
         {!! Form::text('curso', null, ['class'=>'form-control']) !!}
        </div>
    
        
         <div class="form-group">
         {!! Form::submit('Cadastrar Aluno', ['class'=>'btn btn-primary']) !!}
         </div>


        {!! Form::close() !!}
    <div>
@endsection