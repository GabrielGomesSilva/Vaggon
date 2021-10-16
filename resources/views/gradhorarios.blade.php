@extends('templates.template');

@section('content')

<div class="container">
    <h1>Grade de Horários</h1>
        <a href="{{route('gradhorario.create')}}"><button class="btn btn-primary">  Criar quadro</button> </a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Turma</th>
                    <th>Horarios</th>
                    <th>Ações</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($GradHorario as $GradHorarios)
                <tr>
                    <td>{{$GradHorarios->Codigo}}</td>
                    <td>{{$GradHorarios->Nome}}</td>
                    <td>{{$GradHorarios->Turma}}</td>        
                    <td>{{$GradHorarios->horarios}}</td>        
                    <td> <a href="{{route('gradhorario.edit', $GradHorarios->id)}}"> Editar</a>  | <a href="{{route('gradhorario.destroy', $GradHorarios->id)}}"> Excluir </a>  </td>
                    
                </tr>
                    @endforeach
            
                </tbody>
            </table>
</div>



@endsection