@extends('templates.template')

@section('content')

<form action="{{route('prof.store')}}" method="POST">
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
            <span>Cpf</span>
                <input type="number" name="Cpf">
        </div>
        <div class="col-sm-3">
            <span>Data_nascimento</span>
                <input type="date" name="Data_nascimento">
        </div>   
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar">

</form>


@endsection