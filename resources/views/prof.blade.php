@extends('templates.template');

@section('content')

<div class="container">
    <div class="row ajustcabecalho " >   
        <div class="col-10"><h1>Professores</h1></div>
        <div class="col-2"><a href="{{route('prof.create')}}"><button class="btn btn-primary">  Cadastrar</button> </a></div>      
    </div>
    <table class="table">
        <thead class="thead">
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Data de Nascimento</th>
            <th>Disciplina</th>
            <th>Ações</th>
            
        </tr>
        </thead>
        <tbody>
            @foreach($prof as $professores)
        <tr>
            <td>{{$professores->Nome}}</td>
            <td>{{$professores->Cpf}}</td>
            <td>{{$professores->Data_nascimento}}</td>
            <td>{{$professores->MultiDisciplinas[0]['Nome']}}</td>
            <td> <a href="{{route('prof.edit', $professores->id)}}"> Editar</a>  | <a href="{{route('prof.destroy', $professores->id)}}"> Excluir </a>  </td>
            
        </tr>
            @endforeach
            
        </tbody>
    </table>
    
</div>
    

@endsection