@extends('templates.template');

@section('content')

<div class="container">
<div class="row ajustcabecalho" >
<div class="col-10"><h1>Turmas</h1> </div>
<div class="col-2"><a href="{{route('turma.create')}}"><button class="btn btn-primary">  Cadastrar</button> </a></div>
</div>
            <table class="table">
                <thead class="thead">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Estudantes</th>
                    <th>Ações</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($Turma as $Turmas)
                <tr>
                    <td>{{$Turmas->Codigo}}</td>
                    <td>{{$Turmas->Nome}}</td>
                    <td>{{$Turmas->Estudantes}}</td>        
                    <td> <a href="{{route('turma.edit', $Turmas->id)}}"> Editar</a>  | <a href="{{route('turma.destroy', $Turmas->id)}}"> Excluir </a>  </td>
                    
                </tr>
                    @endforeach
            
                </tbody>
            </table>
</div>



@endsection