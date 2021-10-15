@extends('templates.template');

@section('content')

<div class="container">
<h1>Cadastrar Professores</h1>
<a href="{{route('prof.create')}}"><button class="btn btn-primary">  Cadastrar Professores</button> </a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Data de Nascimento</th>
            <th>Disciplina</th>
            <th>Turma</th>
            <th>Ações</th>
            
        </tr>
        </thead>
        <tbody>
            @foreach($prof as $professores)
        <tr>
            <td>{{$professores->Nome}}</td>
            <td>{{$professores->Cpf}}</td>
            <td>{{$professores->Data_nascimento}}</td>
            <td>{{$professores->Disciplina}}</td>
            <td>{{$professores->Turma}}</td>
            <td> <a href="{{route('prof.edit', $professores->id)}}"> Editar</a>  | <a href="{{route('prof.destroy', $professores->id)}}"> Excluir </a>  </td>
            
        </tr>
            @endforeach
       
        </tbody>
    </table>
</div>
    

@endsection