<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Database\QueryException as QueryExceptionAlias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('index', compact('recipes'));
    }

    public function about()
    {
        return view('about');
    }
//
//    public function add()
//    {
//        return view('add');
//    }

    public function random()
    {
        return view('random');
    }

    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        if (is_null(Auth::user()))
        {
            throw new \Exception("Access denied Exception");
        }
//
//        dump($request->input('name'));
//        dump($request->input('igredients'));
//        dump($request->input('preparing'));
//        dump($request->input('dif_level'));

        $recipe = new Recipe([
            'name' => $request->input('name'),
            'ingredient' => $request->input('igredients'),
            'preparing' => $request->input('preparing'),
            'level' => $request->input('dif_level'),
        ]);
        try {

            $recipe->save();
            return redirect()->route('index');
        } catch(QueryExceptionAlias $e) {
          //  dump($e);
            //dd("Błąd z bazy danych!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("test show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd("test edit");
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
        dd("test update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("test destroy");
    }
}
