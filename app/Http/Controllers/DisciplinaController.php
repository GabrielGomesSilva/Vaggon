<?php

namespace App\Http\Controllers;

use App\Models\ModelDisciplina;
use App\Models\ModelProf;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    
    //public $objAlunos;
    public $objDisciplina;
    public $objProf;

    public function __construct()
    {
        
        //$this->objProf = new ModelProf();
        $this->objDisciplina = new ModelDisciplina();
        $this->objProf = new ModelProf();

    }

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Disciplina = $this->objDisciplina->all();
        return view('disciplina', compact('Disciplina'));

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
        $Prof = $this->objProf->all();
        return view('Cadastro/Disciplina' , compact('Prof'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cadastro = $this->objDisciplina->create([
            'Codigo'=>$request->Codigo,
            'Nome'=>$request->Nome,
            'Professores'=>$request->Professores,
            

        ]);

        if($cadastro){
            return redirect('Disciplinas');

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
        $DisciplinaEdit = $this->objDisciplina->Find($id);
        return view('Editar/Disciplina', compact('DisciplinaEdit'));


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
        $this->objDisciplina->where(['id'=>$id])->update([
            'Codigo'=>$request->Codigo,
            'Nome'=>$request->Nome,
            'Professores'=>$request->Professores,
            

        ]);

        return redirect('Disciplinas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->objDisciplina->destroy($id);

        return redirect('Disciplinas');


    }


}
