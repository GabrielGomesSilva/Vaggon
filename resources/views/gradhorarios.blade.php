@extends('templates.template');

@section('content')

<div class="container">
<div class="row ajustcabecalho" >
<div class="col-10"><h1>Grade de Horários</h1></div>
<div class="col-2"><a href="{{route('gradhorario.create')}}"><button class="btn btn-primary">  Cadastrar</button> </a></div>
</div>
            <table class="table">
                <thead class="thead">
                <tr>
                    <th>Hórario</th>
                    <th>Segunda</th>
                    <th>Terça</th>
                    <th>Quarta</th>
                    <th>Quinta</th>
                    <th>Sexta</th>
                    <th>Sábado</th>
                    <th>Domingo</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($GradHorario as $GradHorarios)
                <tr>
                    <td>{{$GradHorarios->Codigo}}</td>
                    <td>{{$GradHorarios->Nome}} </br> {{$GradHorarios->Turma}} </br> {{$GradHorarios->horarios}} </br> {{$GradHorarios->horarios}} </td>
                    <td></td>        
                    <td></td>        
                    <td></td>        
                    <td>{{$GradHorarios->horarios}}</td>        
                    <td>{{$GradHorarios->horarios}}</td>        
                    <td> <a href="{{route('gradhorario.edit', $GradHorarios->id)}}"> Editar</a>  | <a href="{{route('gradhorario.destroy', $GradHorarios->id)}}"> Excluir </a>  </td>
                    
                </tr>
                    @endforeach
            
                </tbody>
            </table>
</div>



@endsection