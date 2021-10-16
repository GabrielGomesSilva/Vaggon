
@extends('templates.template')

@section('content')
    <form action="{{route('gradhorario.store')}}" method="POST">
    @csrf    
        <div class="row">
            <div class="col-sm-3">
                <span>Nome</span>
                    <input type="text" name="Nome">
            </div>
            <div class="col-sm-3">
                <span>Código</span>
                    <input type="text" name="Codigo">
            </div>              
            <div class="col-sm-3">
                <span>Turmas:</span>
                <select name="Turma"> 
                    @foreach($GradTurma as $turmas)
                    <option value="{{$turmas->Nome}}"> {{$turmas->Nome}}</option>
                   
                    @endforeach
                </select>
            </div> 
            <input type="text" name="id_turma" value="1">
            
                

            <div class="col-sm-3">
                <span>Horarios</span>
                    <input type="text" name="horarios">
            </div> 
        </div>
        
        <input type="submit" class="btn btn-primary" value="Cadastrar">

    </form>

@endsection