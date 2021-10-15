@extends('templates.template');

@section('content')

<div class="container">
    <h1>Cadastrar Alunos</h1>
        <a href="{{route('aluno.create')}}"><button class="btn btn-primary">  Cadastrar Alunos</button> </a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Data de Nascimento</th>
                    <th>Disciplina</th>
                    <th>Turma</th>
                    <th>Ações</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($Aluno as $Alunos)
                <tr>
                    <td>{{$Alunos->Codigo}}</td>
                    <td>{{$Alunos->Nome}}</td>
                    <td>{{$Alunos->Cpf}}</td>
                    <td>{{$Alunos->Data_nascimento}}</td>
                    <td>{{$Alunos->Turma}}</td>
                    <td> <a href="{{route('aluno.edit', $Alunos->id)}}"> Editar</a>  | <a href="{{route('aluno.destroy', $Alunos->id)}}"> Excluir </a>  </td>
                    
                </tr>
                    @endforeach
            
                </tbody>
            </table>
</div>



@endsection