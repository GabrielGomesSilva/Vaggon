@extends('templates.template')

@section('content')

<form action="{{route('horario.update', $HorariosEdit->id)}}" method="POST">
@csrf    
    <div class="row">
        <div class="col-sm-3">
            <span>Professor</span>
                <input type="text" name="Professor" value="{{$HorariosEdit->Professor ?? ''}}">
        </div>
        <div class="col-sm-3">
            <span>Código</span>
                <input type="text" name="Codigo" value="{{$HorariosEdit->Codigo ?? '' }}" >
        </div>

        <div class="col-sm-3">
            <span>Disciplina</span>
                <input type="text" name="Disciplina" value="{{$HorariosEdit->Disciplina ?? '' }}" >
        </div>
        <div class="col-sm-3">
            <span>dia_semana</span>
                <input type="date" name="dia_semana" value="{{$HorariosEdit->dia_semana ?? '' }} " >
        </div>   
        <div class="col-sm-3">
            <span>horario_inicio</span>
                <input type="text" name="horario_inicio" value="{{$HorariosEdit->horario_inicio ?? '' }} " >
        </div>   
        <div class="col-sm-3">
            <span>horario_fim</span>
                <input type="text" name="horario_fim" value="{{$HorariosEdit->horario_fim ?? '' }} " >
        </div>   
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar" >

</form>




@endsection