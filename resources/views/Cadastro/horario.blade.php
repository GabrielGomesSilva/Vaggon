@extends('templates.template')

@section('content')

<form action="{{route('horario.store')}}" method="POST">
@csrf    
    <div class="row">
        <div class="col-sm-3">
            <span>Disciplina</span>
                <input type="text" name="Disciplina">
        </div>
        <div class="col-sm-3">
            <span>Código</span>
                <input type="text" name="Codigo">
        </div>

        <div class="col-sm-3">
            <span>Professor</span>
                <input type="number" name="Professor">
        </div>
        <div class="col-sm-3">
            <span>Dia_semana</span>
                <input type="date" name="Dia_semana">
        </div>   
        <div class="col-sm-3">
            <span>horario_inicio</span>
                <input type="time" name="horario_inicio">
        </div>   
        <div class="col-sm-3">
            <span>horario_fim</span>
                <input type="time" name="horario_fim">
        </div>   
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar">

</form>


@endsection