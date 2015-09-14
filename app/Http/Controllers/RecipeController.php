<?php

namespace App\Http\Controllers;

use App\Recipe;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    /**
     * Display the resource index.
     *
     * @return Response
     */
    public function index()
    {
        return view('recipes.index');
    }

    /**
     * Display a listing of the resource in JSON.
     *
     * @return Response
     */
    public function getRecipes()
    {
        $recipes = Recipe::all();
        return $recipes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = Request::all();
        Recipe::create($input);
        return redirect('recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
