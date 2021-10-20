@extends('templates.template');

@section('content')

<div class="container">
  <div class="row ajustcabecalho" >
  <div class="col-10"><h1>Horários</h1> </div>
  <div class="col-2"><a href="{{route('horario.create')}}"><button class="btn btn-primary"> Cadastrar</button> </a></div>
  </div>
            <table class="table">
                <thead class="thead">
                <tr>
                    <th>Código</th>
                    <th>Disciplina</th>
                    <th>Professor</th>
                    <th>Dia</th>
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