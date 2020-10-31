<?php

namespace App\Http\Controllers;

use App\Models\Documentos;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos ['documentos'] = documentos::paginate(5);

        return view('documentos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $datosDocumentos=request()->all();
        $datosDocumentos=request()->except('_token');

        if($request->hasFile('foto')){
            $datosDocumentos['foto']=$request->file('foto')->store('uploads', 'public');

        }




        documentos::insert($datosDocumentos);
        return response()->json($datosDocumentos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show(Documentos $documentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $documento = documentos::findOrFail($id);
        return view('documentos.edit',compact('documento'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datosDocumentos=request()->except(['_token', '_method']);
        documentos::where('id', '=', $id)->update($datosDocumentos);

        $documento = documentos::findOrFail($id);
        return view('documentos.edit',compact('documento'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        documentos::destroy($id);
        return redirect('/documentos');
    }
}
