<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\Dogs;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('dogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('dogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        return view('dogs.show', [
       'dog'=> $dog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dog $dog)
    {
        return view('dogs.edit', compact('dog'));
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

    public function dogg(Dog $dog)

    {

        return view('dog', [
       'dog'=> $dog

      ]);
    }

    public function retired() {

        $dogs = Dog::where('dogstat', '=', 'R')
                    ->orderBy('birthday');

        // if(request('search')) {
        //   $dogs->where('callName', 'like', '%' . request('search') . '%');
        //    }

        return view('retired', [
            'dogs'=> $dogs->paginate(9)
        ]);

      }

      public function rbgirls() {

        $dogs = Dog::where('dogstat', '=', 'RB')
                    ->where('sex', 'like', 'F'.'%')
                    ->orderBy('birthday');

        // if(request('search')) {
        //   $dogs->where('callName', 'like', '%' . request('search') . '%');
        //    }

        return view('rb_girls', [
            'dogs'=> $dogs->paginate(9)
        ]);

      }

      public function rbboys() {

        $dogs = Dog::where('dogstat', '=', 'RB')
                    ->where('sex', 'like', 'M'.'%')
                    ->orderBy('birthday');

        // if(request('search')) {
        //   $dogs->where('callName', 'like', '%' . request('search') . '%');
        //    }

        return view('rb_boys', [
            'dogs'=> $dogs->paginate(9)
        ]);

      }
}
