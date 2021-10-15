@extends('templates.template')
    @section('content')
 
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{route('prof.index')}}">  Professores </a> 
                </div>
                <div class="col-sm-4">
                    <a href="{{route('alunos.index')}}"> Alunos </a>
                    
                </div>
                <div class="col-sm-4">
                    <a href="{{route('horarios.index')}}"> Horarios </a>
                </div>
            </div>

        
        </div>    
    @endsection
  
