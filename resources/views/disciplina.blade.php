@extends('templates.template');

@section('content')

<div class="container">
    <div class="row ajustcabecalho" >
    <div class="col-10"><h1>Disciplinas</h1></div>
    <div class="col-2"><a href="{{route('disciplina.create')}}"><button class="btn btn-primary">  Cadastrar </button> </a></div>
    </div>
            <table class="table">
                <thead class="thead">
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