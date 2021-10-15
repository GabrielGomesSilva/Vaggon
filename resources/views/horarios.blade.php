@extends('templates.template');

@section('content')

<div class="container">
    <h1>Cadastrar Horarios</h1>
        <a href="{{route('horario.create')}}"><button class="btn btn-primary">  Cadastrar Alunos</button> </a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Código</th>
                    <th>Disciplina</th>
                    <th>Professor</th>
                    <th>Dia da Semana</th>
                    <th>Horario de inicio</th>
                    <th>Horario do fim</th>
                    <th>Ações</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($Horario as $horarios)
                <tr>
                    <td>{{$horarios->Codigo}}</td>
                    <td>{{$horarios->Disciplina}}</td>
                    <td>{{$horarios->Professor}}</td>
                    <td>{{$horarios->dia_semana}}</td>
                    <td>{{$horarios->horario_inicio}}</td>
                    <td>{{$horarios->horario_fim}}</td>
                    <td> <a href="{{route('horario.edit', $horarios->id)}}"> Editar</a>  | <a href="{{route('horario.destroy', $horarios->id)}}"> Excluir </a>  </td>
                    
                </tr>
                    @endforeach
            
                </tbody>
            </table>
</div>


@endsection