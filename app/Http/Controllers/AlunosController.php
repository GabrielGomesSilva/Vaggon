<?php

namespace App\Http\Controllers;

use App\Models\ModelAluno;
use App\Models\ModelProf;
use App\Models\ModelTurma;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    
    public $objAlunos;
    public $objProf;

    public function __construct()
    {
        
        //$this->objProf = new ModelProf();
        $this->objAlunos = new ModelAluno();
        $this->objTurma = new ModelTurma();

    }

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Aluno = $this->objAlunos->all();
        return view('alunos', compact('Aluno'));

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
        $Turma = $this->objAlunos->find(1)->AlunoTurma;
        return view('Cadastro/Aluno', compact('Turma'));
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
            'Cpf'=>$request->Cpf,
            'Data_nascimento'=>$request->Data_nascimento,
            'Turma'=>$request->Turma,

        ]);

        if($cadastro){
            return redirect('Alunos');

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
        $TurmaEdit = $this->objTurma->all();
        $AlunoEdit = $this->objAlunos->Find($id);
        return view('Editar/Aluno', compact(array('AlunoEdit', 'TurmaEdit')));


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
