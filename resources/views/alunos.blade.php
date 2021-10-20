@extends('templates.template');

@section('content')

<div class="container">
    <div class="row ajustcabecalho" >   
    <div class="col-10"><h1>Alunos</h1></div>
    <a href="{{route('aluno.create')}}"><button class="btn btn-primary">  Cadastrar </button> </a>
    </div>
       
            <table class="table">
                <thead class="thead">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Data de Nascimento</th>
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