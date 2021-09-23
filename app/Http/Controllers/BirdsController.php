<?php

namespace App\Http\Controllers;

use App\Models\Bird;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BirdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $birds = Bird::all();

        Session::put('activeNav', 'home');

        return view('birds.index', [
            'birds' => $birds
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('birds.create');
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
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required'
        ], [
            'name.required' => 'name is required',
            'description.required' => 'description is required',
            'image.required' => 'image is required',
            'price.required' => 'price is required',
        ]);

        /* For informational purposes only
        Bird::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'price' => $request->input('price')
        ]);*/

        // Shortcut way of fetching all of the inputs
        // with request, using function all()
        Bird::create($request->all());

        return redirect()->route('birds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bird $bird)
    {
        return view('birds.show', compact('bird'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bird $bird)
    {
        return view('birds.edit', compact('bird'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bird $bird)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required'
        ], [
            'name.required' => 'name is required',
            'description.required' => 'description is required',
            'image.required' => 'image is required',
            'price.required' => 'price is required',
        ]);

        $bird->update($request->all());

        return redirect()->route('birds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bird $bird)
    {
        $bird->delete();

        return redirect()->route('birds.index');
    }
}
