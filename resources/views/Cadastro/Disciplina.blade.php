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
            <select name="Professores"> 
                       <!-- <option value="">  </option>-->
                        @foreach($Prof as $turmas)
                        <option value="{{$turmas->Nome}}"> {{$turmas->Nome}}</option>                    
                        @endforeach
            </select>
        </div> 
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar">

</form>


@endsection