<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subir');
    }

    public function galeria(){
        $fotos = Foto::all();
        return view('visualizar', compact('fotos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function guardar(Request $request){

        //return $request->all();
        
        $nuevaFoto = new Foto;
        $nuevaFoto->name = $request->name;
        $nuevaFoto->description = $request->description;
        $image = $request->file('path');
        $ext = $image->getClientOriginalExtension();

        $filename = uniqid().'.'.$ext;
        $image->storeAs('public/pics',$filename);

        $nuevaFoto->path = $filename;

        $nuevaFoto->save();
        return back();
    }
}
