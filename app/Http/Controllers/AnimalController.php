<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        return Animal::all();
    }

    public function show(Request $id)
    {
        $animal = Animal::findOrFail($id);
        return $animal;
    }

    public function store(Request $request)
    {
        $animal = Animal::create($request->all());

        return response()->json($animal, 201);
    }

    public function update(Request $request, Animal $animal)
    {
        $animal->update($request->all());

        return response()->json($animal, 200);
    }

    public function delete(Animal $animal)
    {
        $animal->delete();

        return response()->json(null, 204);
    }
}
