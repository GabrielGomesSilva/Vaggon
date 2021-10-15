@extends('templates.template')

@section('content')

<form action="{{route('disciplina.update', $DisciplinaEdit->id)}}" method="POST">
@csrf    
    <div class="row">
        <div class="col-sm-3">
            <span>Nome</span>
                <input type="text" name="Nome" value="{{$DisciplinaEdit->Nome ?? ''}}">
        </div>
        <div class="col-sm-3">
            <span>Código</span>
                <input type="text" name="Codigo" value="{{$DisciplinaEdit->Codigo ?? '' }}" >
        </div>

        <div class="col-sm-3">
            <span>Professores</span>
                <input type="text" name="Professores" value="{{$DisciplinaEdit->Professores ?? '' }}" >
        </div>
    
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar" >

</form>




@endsection