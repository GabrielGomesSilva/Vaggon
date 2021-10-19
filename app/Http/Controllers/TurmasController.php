<?php

namespace App\Http\Controllers;

use App\Models\ModelAluno;
use App\Models\ModelTurma;
use Illuminate\Http\Request;

class TurmasController extends Controller
{
    //public $objAlunos;
    //public $objDisciplina;
    public $objTurma;

    public function __construct()
    {
        
        //$this->objProf = new ModelProf();
        //$this->objDisciplina = new ModelDisciplina();
        $this->objTurma = new ModelTurma();
        $this->objAlunos = new ModelAluno();

    }

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Turma = $this->objTurma->all();
        return view('turma', compact('Turma'));

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
        $Aluno = $this->objAlunos->all();
        return view('Cadastro/Turma' , compact('Aluno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        

       

        $cadastro = $this->objTurma->create([
            'Codigo'=>$request->Codigo,
            'Nome'=>$request->Nome,
            
            

        ]);

    

        if($cadastro){
            return redirect('Turmas');

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
        $AlunoEdit = $this->objAlunos->all();
        $TurmaEdit = $this->objTurma->Find($id);
        return view('Editar/Turma', compact( array('TurmaEdit', 'AlunoEdit')));


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
        $this->objTurma->where(['id'=>$id])->update([
            'Codigo'=>$request->Codigo,
            'Nome'=>$request->Nome,
           
            

        ]);

        return redirect('Turmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->objTurma->destroy($id);

        return redirect('Turmas');


    }
}
