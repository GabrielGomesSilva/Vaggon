@extends('templates.template')

@section('content')

<form action="{{route('aluno.update', $AlunoEdit->id)}}" method="POST">
@csrf    
    <div class="row">
        <div class="col-sm-3">
            <span>Nome</span>
                <input type="text" name="Nome" value="{{$AlunoEdit->Nome ?? ''}}">
        </div>
        <div class="col-sm-3">
            <span>Código</span>
                <input type="text" name="Codigo" value="{{$AlunoEdit->Codigo ?? '' }}" >
        </div>

        <div class="col-sm-3">
            <span>Cpf</span>
                <input type="number" name="Cpf" value="{{$AlunoEdit->Cpf ?? '' }}" >
        </div>
        <div class="col-sm-3">
            <span>Data_nascimento</span>
                <input type="date" name="Data_nascimento" value="{{$AlunoEdit->Data_nascimento ?? '' }} " >
        </div>   
        <div class="col-sm-3">
            <span>Turma</span>
                <input type="text" name="Turma" value="{{$AlunoEdit->Turma ?? '' }} " >
        </div>   
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar" >

</form>




@endsection