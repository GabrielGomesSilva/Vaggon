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
        
        $cadastro = $this->objAlunos->create([
            'Codigo'=>$request->Codigo,
            'Nome'=>$request->Nome,
            'Professores'=>$request->Cpf,
            'id_turma'=>$request->id_turma,
            'Turma'=>$request->Turma,

        ]);

        if($cadastro){
            return redirect('Horarios');

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $AlunoEdit = $this->objAlunos->Find($id);
        return view('Editar/Aluno', compact('AlunoEdit'));


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
        $this->objAlunos->where(['id'=>$id])->update([
            'Codigo'=>$request->Codigo,
            'Nome'=>$request->Nome,
            'Cpf'=>$request->Cpf,
            'Data_nascimento'=>$request->Data_nascimento,
            'Turma'=>$request->Turma,

        ]);

        return redirect('Alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->objAlunos->destroy($id);

        return redirect('Alunos');


    }


}
