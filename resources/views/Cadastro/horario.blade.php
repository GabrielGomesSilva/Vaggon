
@extends('templates.template')

@section('content')

<div class=" text-center mt-5 ">
    <h1 class="H1">Cadastrar Horários</h1>
</div>
    <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form" action="{{route('horario.store')}}" method="POST">
                            @csrf  
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Disciplinas</label>
                                            <select  id="form_need" name="Disciplina" class="form-control" required="required" data-error="">
                                            @foreach($Disciplina as $Disciplinas)
                                                <option value="{{$Disciplinas->Nome}}">{{$Disciplinas->Nome}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">Código</label> <input id="form_lastname" type="text" name="Codigo" class="form-control" placeholder="" required="required" data-error="Lastname is required."> </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group"> <label for="form_need">Professores</label>
                                            <select  id="form_need" name="Professor" class="form-control" required="required" data-error="">
                                            @foreach($Professor as $Professores)
                                                <option value="{{$Professores->Nome}}">{{$Professores->Nome}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">Dia_semana</label> <input id="form_email" type="text" name="Dia_semana" class="form-control" placeholder="" required="required" data-error="Valid email is required."> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_message">horario_inicio</label> <input id="form_email" type="time" name="horario_inicio" class="form-control" placeholder="" required="required" data-error="Valid email is required.">  </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_message">horario_fim</label> <input id="form_email" type="time" name="horario_fim" class="form-control" placeholder="" required="required" data-error="Valid email is required.">  </div>
                                        </div>
                                        <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Cadastrar"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
</div>





@endsection