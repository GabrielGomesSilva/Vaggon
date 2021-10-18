@extends('templates.template')
    @section('content')
 
        <div class="container">
            <div class="card">
                <div class="card-header"></div>
                    <div class="card-body" id="CardBody">
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
                                <div class="col-sm-3">
                                    <a href="{{route('turma.index')}}"> Turmas </a>
                                </div>
                            </div>
                    </div>
                </div>
        </div>    
    @endsection
  
