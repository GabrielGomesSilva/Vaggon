@extends('templates.template')

@section('content')

<div class="container">
    <form action="{{route('gradhorario.update', $GradHorarioEdit->id)}}" method="POST">
    @csrf    
        <div class="row">
            <div class="col-sm-6">
                <span>Código</span>
                    <input type="text" name="Codigo" value="{{$GradHorarioEdit->Codigo ?? '' }}" >
            </div>
            <div class="col-sm-6">
                <span>Nome</span>
                    <input type="text" name="Nome" value="{{$GradHorarioEdit->Nome ?? ''}}">
            </div>
        </div>

        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-4" >
                    <select name="Turma"> 
                        <option value="{{$GradHorarioEdit->Turma ?? '' }}"> {{$GradHorarioEdit->Turma ?? '' }} </option>
                        @foreach($GradTurma as $turmas)
                        <option value="{{$turmas->Nome}}"> {{$turmas->Nome}}</option>                    
                        @endforeach
                    </select>
            </div> 
            <div class="col-sm-4">
                <span>Horarios</span>
                    <input type="text" name="horarios" value="{{$GradHorarioEdit->horarios ?? '' }}" >
            </div>
                
            <div class="col-sm-4">
                <span>id_turma</span>
                <input type="text" name="id_turma" value="1">
            </div> 
        </div>
        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Cadastrar" >
        </div>

    </form>

</div>


@endsection