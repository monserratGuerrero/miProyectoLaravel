<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulta los datos de la bd al modelo
        $materias=Materia::all();
        //le pasamaos la variable de materias que tiene la consulta de la tabla
        return view('materia.indexMateria',  compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('materia.formMateria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //crear validaciones para el formulario
        $request->validate([
            'nombre'=>'required|max:45',
            'seccion'=>'required|max:5',
            'horario'=>'required|max:10',
        ]);
        
        //para recibir los datos de una vista
        //instancio el modelo
       /*
        $materia=new Materia();
        //guardo los datos recibidos del formulario, en mi nuevo modelo
        $materia->nombre=$request->input('nombre');
        $materia->seccion=$request->input('seccion');
        $materia->horario=$request->input('horario');
        $materia->save();
        */
       Materia::create($request->all());
       
        return redirect()->route('materia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materium)
    {
        $materia=$materium;
        return view('materia.showMateria', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materium)
    {
        $materia=$materium;
        //$materia=Materia::findOrFail($id);
         return view('materia.formMateria',  compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materium)
    {
        $materium->update($request->all());
        
        return redirect()->route('materia.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materium)
    {
        $materia=$materium;
        $materia->delete();
        return redirect()->route('materia.index'); 
    }
}
