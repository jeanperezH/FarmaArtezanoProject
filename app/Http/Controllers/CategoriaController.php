<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return $categorias;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');
        $categoria = new Categoria();
        $categoria->cNomCatego = $request->cNomCatego;
        $categoria->cDesCatego = $request->cDesCatego;
        $categoria->lCondicCat = '1';
        $categoria->save();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // if (!$request->ajax()) return redirect('/');
        $categoria = Categoria::findOrFail($request->id);
        $categoria->cNomCatego = $request->cNomCatego;
        $categoria->cDesCatego = $request->cDesCatego;
        $categoria->lCondicCat = '1';
        $categoria->save();
    }

    public function desactivar(Request $request)
    {
        // if (!$request->ajax()) return redirect('/');
        $categoria = Categoria::findOrFail($request->id);
        $categoria->lCondicCat = '0';
        $categoria->save();
    }

    public function activar(Request $request)
    {
        // if (!$request->ajax()) return redirect('/');
        $categoria = Categoria::findOrFail($request->id);
        $categoria->lCondicCat = '1';
        $categoria->save();
    }
}
