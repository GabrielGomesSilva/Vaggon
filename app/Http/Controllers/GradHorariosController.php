<?php

namespace App\Http\Controllers;

use App\Models\ModelGradHorario;
use App\Models\ModelTurma;
use Illuminate\Http\Request;

class GradHorariosController extends Controller
{
    
    //public $objAlunos;
    public $objGradHorario;

    public function __construct()
    {
        
        //$this->objProf = new ModelProf();
        $this->objGradHorario = new ModelGradHorario();
        $this->objTurma = new ModelTurma();

    }

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $GradTurma = $this->objTurma->all();
        $GradHorario = $this->objGradHorario->all();
        return view('gradhorarios', compact(array('GradHorario', 'GradTurma')));

        //$Aluno = $this->objAlunos->all();
        //return view('prof', compact('Aluno'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $GradTurma = $this->objTurma->all();
        return view('Cadastro/GradHorario', compact('GradTurma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*$GradHorario = $this->objTurma->all();
        foreach($GradHorario as $GradHorarios){
                if($request->id_turma == $GradHorarios->id_turma){



                }

        } */
        $turma = $this->objGradHorario->all();
        $turma->Disciplinas()->save() ;
        
        

        $cadastro = $this->objGradHorario->create([
            'Codigo'=>$request->Codigo,
            'Nome'=>$request->Nome,
            'Turma'=>$request->Turma,
            'horarios'=>$request->horarios,
            'id_turma'=>$request->id_turma,
            

        ]);

        if($cadastro){
            return redirect('GradHorarios');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $teste = ModelGradHorario::all();

        return view('show', compact('teste'));

          //$disciplinas = $teste->Disciplinas()->first();
/*          dd($teste);

          if($disciplinas){
              echo "{$disciplinas->nome}";
          }*/

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $GradTurma = $this->objTurma->all();
        $GradHorarioEdit = $this->objGradHorario->Find($id);
        return view('Editar/GradHorario', compact(array('GradHorarioEdit', 'GradTurma')));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objGradHorario->where(['id'=>$id])->update([
            'Codigo'=>$request->Codigo,
            'Nome'=>$request->Nome,
            'Turma'=>$request->Turma,
            'horarios'=>$request->horarios,
            'id_turma'=>$request->id_turma,

        ]);

        return redirect('GradHorarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->objGradHorario->destroy($id);

        return redirect('GradHorarios');


    }


}
