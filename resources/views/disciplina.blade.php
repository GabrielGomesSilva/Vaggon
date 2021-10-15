@extends('templates.template');

@section('content')

<div class="container">
    <h1>Cadastrar disciplina</h1>
        <a href="{{route('disciplina.create')}}"><button class="btn btn-primary">  Cadastrar disciplina</button> </a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Professores</th>
                    <th>Ações</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($Disciplina as $Disciplinas)
                <tr>
                    <td>{{$Disciplinas->Codigo}}</td>
                    <td>{{$Disciplinas->Nome}}</td>
                    <td>{{$Disciplinas->Professores}}</td>        
                    <td> <a href="{{route('disciplina.edit', $Disciplinas->id)}}"> Editar</a>  | <a href="{{route('disciplina.destroy', $Disciplinas->id)}}"> Excluir </a>  </td>
                    
                </tr>
                    @endforeach
            
                </tbody>
            </table>
</div>



@endsection