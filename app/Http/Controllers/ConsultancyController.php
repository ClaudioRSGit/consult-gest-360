<?php

namespace App\Http\Controllers;

use App\Models\Consultancy;
use App\Http\Requests\StoreConsultancyRequest;
use App\Http\Requests\UpdateConsultancyRequest;

class ConsultancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreConsultancyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultancyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function show(Consultancy $consultancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultancy $consultancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConsultancyRequest  $request
     * @param  \App\Models\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultancyRequest $request, Consultancy $consultancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultancy $consultancy)
    {
        //
    }
}
