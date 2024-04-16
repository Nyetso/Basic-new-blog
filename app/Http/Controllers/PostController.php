<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        return "Its Working with id ".$id;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "I am the method that create stuff!";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return " This is the show method !". $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // my own function
    public function contact()
    {
        $people = ['Hari', 'Mir'];

        return view('contact', compact('people'));
    }

    public function post($id, $name, $password)
    {
        return view('post',compact('id', 'name', 'password'));
    }

}

