<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response()->json(['data'=> Film::all()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'slug'      => 'required|unique:films|max:255',
            'release'   => 'required',
            'locale'    => 'required',
            'duration'  => 'required',
            'sinopse'   => 'required',
            'cover'     => 'required',
        ]);

        return Film::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return response()->json(['data'=> $film]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'slug'      => 'required|unique:films|max:255',
            'release'   => 'required',
            'locale'    => 'required',
            'duration'  => 'required',
            'sinopse'   => 'required',
            'cover'     => 'required',
        ]);

         $film = $film->fill($request->all()); 

         return response()->json(['data'=> $film]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();

        return response()->json(['data'=> 'Deleted']);
    }
}
