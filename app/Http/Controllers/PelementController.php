<?php

namespace App\Http\Controllers;

use App\Page;
use App\Pelement;
use Illuminate\Http\Request;

class PelementController extends Controller
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
     * @param  \App\Pelement  $pelement
     * @return \Illuminate\Http\Response
     */
    public function show(Pelement $pelement)
    {
        return Pelement::with('image')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelement  $pelement
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelement $pelement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelement  $pelement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelement $pelement)
    {
        $data = $request->validate([
            'title'=> 'required|string',
            'content' => 'required|string',
        ]);

        $pelement->update($data);
        $pelement->images()->sync($request->images);

        return response($pelement, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelement  $pelement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelement $pelement)
    {
        //
    }
}
