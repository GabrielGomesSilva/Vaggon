<h1> </h1>

<div>
@foreach($teste->MultiDisciplinas as $testes)
   <h1> {{$testes->pivot->Nome}} </h1>   
@endforeach


</div>