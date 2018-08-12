<?php

namespace App\Http\Controllers;

use App\Consultor;
use Illuminate\Http\Request;

class ConsultorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array("nome"=>"Felipe");
        return view('consultor/index',$data);
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
     * @param  \App\Consultor  $consultor
     * @return \Illuminate\Http\Response
     */
    public function show(Consultor $consultor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultor  $consultor
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultor $consultor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultor  $consultor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultor $consultor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultor  $consultor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultor $consultor)
    {
        //
    }
}
