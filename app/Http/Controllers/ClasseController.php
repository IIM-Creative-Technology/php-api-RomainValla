<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    // Return all classes
    public function getAllClasses()
    {
        return response()->json(Classe::all());
    }

    // Create a class
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'year' => 'required|string'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return Classe::create($request->all());
    }

    // Update a class
    public function update(Request $request, Classe $classe )
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'year' => 'required|string'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $classe->update($request->all());
        return $classe;
    }
}

