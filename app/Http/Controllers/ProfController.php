<?php

namespace App\Http\Controllers;
use App\Models\ModelAluno;
use App\Models\ModelDisciplina;
use App\Models\ModelProf;
use Illuminate\Http\Request;

class ProfController extends Controller
{

    private $objProf;


    public function __construct()
    {
        
        $this->objProf = new ModelProf();
        $this->objAlunos = new ModelAluno();
        $this->objDisciplinas = new ModelDisciplina();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$teste = ModelProf::find(1)->MultiDisciplinas;
        $Aluno = $this->objAlunos->all();
        $prof = $this->objProf->all();
        return view('prof', compact(array('prof','Aluno')));

        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Disciplina = $this->objDisciplinas->all();
        return view('Cadastro/prof', compact('Disciplina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = $this->objProf->create([
            'Nome'=>$request->Nome,
            'Codigo'=>$request->Codigo,
            'Cpf'=>$request->Cpf,
            'Data_nascimento'=>$request->Data_nascimento,
            'id_disciplina'=>$request->id_disciplina,

        ]);

        if($cadastro){
            return redirect('professores');

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
        $teste = ModelProf::find(1)->MultiDisciplinas;

        return view('show', compact('teste'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Disciplina = $this->objDisciplinas->all();
        $ProfEdit = $this->objProf->Find($id);
        return view('Editar/Prof', compact(array('ProfEdit', 'Disciplina')));


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
        
        $this->objProf->where(['id'=>$id])->update([
            'Nome'=>$request->Nome,
            'Codigo'=>$request->Codigo,
            'Cpf'=>$request->Cpf,
            'id_disciplina'=>$request->id_disciplina,
            'Data_nascimento'=>$request->Data_nascimento,

        ]);

        return redirect('professores');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->objProf->destroy($id);

        return redirect('professores');

    }
}
