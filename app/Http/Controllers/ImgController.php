<?php

namespace App\Http\Controllers;

use App\Models\Img;
use Illuminate\Http\Request;

class ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('img/index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('img.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'callName' => 'required',
            'img_pos' => 'required',
            'pics' => 'required',
            'img_by' => 'nullable',
        ]);

        Img::create($request->all());

        return redirect()->route('photo.create')
            ->with('success', ( $request->callName ."'s photo was added"));


    }






    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function show(Img $img)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function edit(Img $img)
    {
          return view('img.edit' ,compact('img'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Img $img)
    {
        $request->validate([
            'callName' => 'required',
            'img_pos' => 'required',
            'pics' => 'required',
            'img_by' => 'nullable',
        ]);


        $img->update($request->all());

        return redirect()->route('photo.index')
            ->with('success', ( $request->callName ."'s photo was updated"));

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function destroy(Img $img)
    {

    }
}
