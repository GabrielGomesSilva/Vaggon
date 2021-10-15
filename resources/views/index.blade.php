@extends('templates.template')
    @section('content')
 
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{route('prof.index')}}">  Professores </a> 
                </div>
                <div class="col-sm-3">
                    <a href="{{route('aluno.index')}}"> Alunos </a>
                    
                </div>
                <div class="col-sm-3">
                    <a href="{{route('horarios.index')}}"> Horarios </a>
                </div>
                <div class="col-sm-3">
                    <a href="{{route('disciplina.index')}}"> Disciplinas </a>
                </div>
                <div class="col-sm-3">
                    <a href="{{route('gradhorario.index')}}"> Grade de horarios </a>
                </div>
            </div>

        
        </div>    
    @endsection
  
