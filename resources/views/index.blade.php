@extends('templates.template')
    @section('content')
 
    <div class=" text-center mt-5 ">
    
        <h1 class="H1">Gerenciamento </h1>
    </div>
        <div class="container">
            <div class="card mt-2 mx-auto p-4 bg-light">
                
                    <div class="card-body bg-light" id="">
                        <div class="container">
                            <div class="row AjustOpcoes" >
                                
                                    <div class="col-sm-3">
                                        <a href="{{route('prof.index')}}"> <img src="{{ URL::asset('icons/Prof.png'); }}" alt="Professores" class="TamIcon" > <p>Professores</p>  </a> 
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{route('aluno.index')}}"> <img src="{{ URL::asset('icons/Alunos.png'); }}" alt="Alunos" class="TamIcon" > <p> Alunos </p> </a>                                   
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{route('horarios.index')}}"> <img src="{{ URL::asset('icons/Horarios.png'); }}" alt="Horários" class="TamIcon" > <p> Horários </p> </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{route('disciplina.index')}}">  <img src="{{ URL::asset('icons/Disciplinas.png'); }}" alt="Disciplinas" class="TamIcon" > <p>Disciplinas </p> </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{route('gradhorario.index')}}"> <img src="{{ URL::asset('icons/Grade.png'); }}" alt="Grade de horários" class="TamIcon" > <p> Grade de horários </p> </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{route('turma.index')}}">  <img src="{{ URL::asset('icons/Turma.png'); }}" alt="Turmas" class="TamIcon" > <p> Turmas </p> </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>    
    @endsection
  
