@extends('templates.template')

@section('content')

<div class=" text-center mt-5 ">
    <h1 class="H1">Cadastrar Turma</h1>
</div>
    <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form" action="{{route('turma.store')}}" method="POST">
                            @csrf  
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_name">Nome </label> <input id="form_name" type="text" name="Nome" class="form-control" placeholder="" required="required" data-error="Firstname is required."> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">Código</label> <input id="form_lastname" type="text" name="Codigo" class="form-control" placeholder="" required="required" data-error="Lastname is required."> </div>
                                        </div>
                                    </div>
                                    <!--<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email"></label> <input id="form_email" type="number" name="Cpf" class="form-control" placeholder="" required="required" data-error="Valid email is required."> </div>
                                        </div>-->
                                        <!--<div class="col-md-6">
                                            <div class="form-group"> <label for="form_need">Estudantes:</br></label> 
                                                    @foreach($Aluno as $Alunos)
                                                    <input type="checkbox" name="Alunos[]" id="" value="{{$Alunos->Nome}}"> {{$Alunos->Nome}} </br>                             
                                                    
                                                    @endforeach
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="row">
                                        <!--<div class="col-md-12">
                                            <div class="form-group"> <label for="form_message">Data Nascimento</label> <input id="form_email" type="date" name="Data_nascimento" class="form-control" placeholder="" required="required" data-error="Valid email is required.">  </div>
                                        </div>-->
                                        <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Cadastrar"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>





@endsection