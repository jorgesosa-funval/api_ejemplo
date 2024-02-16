<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return Carro::all();
    }

 

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Carro::create($request->all());
        return ['created'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         return Carro::find($id);
         
    }

 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $carro =  Carro::find($id);
         $carro->update($request->all());

          return ['Updated'];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $carro = Carro::find($id);
         $carro->delete($id);

          return ['deleted'];
    }
}
