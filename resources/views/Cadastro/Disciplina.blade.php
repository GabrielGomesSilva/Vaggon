@extends('templates.template')

@section('content')

<form action="{{route('disciplina.store')}}" method="POST">
@csrf    
    <div class="row">
        <div class="col-sm-3">
            <span>Nome</span>
                <input type="text" name="Nome">
        </div>
        <div class="col-sm-3">
            <span>Código</span>
                <input type="text" name="Codigo">
        </div>

        <div class="col-sm-3">
            @foreach($Prof as $Professores)
            <input type="checkbox" name="Professores[]" id="" value="{{$Professores->Nome}}"> {{$Professores->Nome}} </br>                             
            @endforeach
           
        </div> 
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar">

</form>


@endsection