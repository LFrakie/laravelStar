<?php

namespace App\Http\Controllers;

use App\Models\Reniec;
use Illuminate\Http\Request;

class ReniecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos["reniecs"]=Reniec::paginate();
        return view("reniec.index", $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("reniec.crear");
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
        $datosReniec=request()->all();        
        $datosReniec=request()->except('_token');        
        Reniec::insert($datosReniec);
        //  return response()->json($datosReniec);
        return redirect('reniecs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reniec  $reniec
     * @return \Illuminate\Http\Response
     */
    public function show(Reniec $reniec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reniec  $reniec
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $reniec =Reniec::findOrFail($id);
        return view('reniec.editar',compact('reniec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reniec  $reniec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosReniec=request()->all();        
        $datosReniec=request()->except('_token','_method');     

        Reniec::where('id','=',$id)->update($datosReniec);
        return redirect('reniecs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reniec  $reniec
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Reniec::destroy($id);
        return redirect('reniecs');
    }
}
