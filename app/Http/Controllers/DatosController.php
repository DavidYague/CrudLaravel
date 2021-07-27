<?php

namespace App\Http\Controllers;

use App\Models\datos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage; 

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=datos::paginate(10);
        return view('sistema.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('sistema.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosCli = request()->except('_token');
        datos::insert($datosCli);
        return view('sistema.create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datos  $datos
     * @return \Illuminate\Http\Response
     */
    public function show(datos $datos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datos  $datos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado = datos::findOrFail($id);

        return view('sistema.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datos  $datos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpleado = request()->except(['_token','_method']);
        datos::where('id','=',$id)->update($datosEmpleado);

        $empleado = datos::findOrFail($id);
        return view('sistema.edit',compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datos  $datos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado=datos::findOrFail($id);

            datos::destroy($id);
        
        return redirect('datos');
    }
}
