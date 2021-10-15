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
            @foreach($GradTurma as $turmas)
        <div class="col-sm-3">
            <span>{{$turmas->Nome}}</span>
                <input type="text" name="Turma">
        </div> 
            @endforeach

        <div class="col-sm-3">
            <span>Horariossss</span>
                <input type="text" name="horarios">
        </div> 
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar">

</form>