<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mped;

class MpedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mped.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mped/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mped = Mped::create($request->all());


        // $request->session()->flash('status', 'The post was created!');

        return redirect()->route('mped.show', ['mped' => $mped->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('mped.show', [
            'mped'=> Mped::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mped $mped)
    {
     return view('mped/edit', compact('mped'));
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
        $mped = Mped::findOrFail($id);

        $mped->update($request->all());

    //    $request->session()->flash('status', 'Pedigree was updated!');

        return redirect()->route('mped.show', ['mped'=> $mped->id]);
    }

    public function pedigree()
    {
        $mpeds = Mped::all();


        return view('mped/pedigree', [
            'mpeds'=> $mpeds
        ]);
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
}
