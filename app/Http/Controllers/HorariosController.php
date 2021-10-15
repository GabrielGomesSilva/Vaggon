<?php

namespace App\Http\Controllers;

use App\Models\ModelHorario;
use Illuminate\Http\Request;

class HorariosController extends Controller
{
    
    public $objHorarios;
    //public $objProf;

    public function __construct()
    {
        
        //$this->objProf = new ModelProf();
        $this->objHorarios = new ModelHorario();

    }
    
    
    /**    
    * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Horario = $this->objHorarios->all();
        return view('horarios', compact('Horario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cadastro/horario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cadastro = $this->objHorarios->create([
            'Codigo'=>$request->Codigo,
            'Disciplina'=>$request->Disciplina,
            'Professor'=>$request->Professor,
            'Dia_semana'=>$request->Dia_semana,
            'horario_inicio'=>$request->horario_fim,
            'horario_fim'=>$request->horario_fim,

        ]);

        if($cadastro){
            return redirect('horario');

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
        $HorariosEdit = $this->objHorarios->Find($id);
        return view('Editar/Horario', compact('HorariosEdit'));

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
        $this->objHorarios->where(['id'=>$id])->update([
            'Codigo'=>$request->Codigo,
            'dia_semana'=>$request->dia_semana,
            'Professor'=>$request->Professor,
            'Disciplina'=>$request->Disciplina,
            'horario_inicio'=>$request->horario_inicio,
            'horario_fim'=>$request->horario_fim,

        ]);

        return redirect('horario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objHorarios->destroy($id);

        return redirect('horario');
    }
}
