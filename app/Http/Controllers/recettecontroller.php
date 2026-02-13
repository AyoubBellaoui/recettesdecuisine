<?php

namespace App\Http\Controllers;

use App\Models\recettes;
use Illuminate\Http\Request;

class recettecontroller extends Controller
{
    public function show_recettes() {

        return view('recettes.create');
    }

    public function store_recettes(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|max:100',
            'description' => 'required',
            'temps_preparation' => 'required|numeric',
            'image' => 'required|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/recettes'), $imageName);
            $validated['image'] = $imageName;
        }

        recettes::create($validated);

        return redirect()->route('recettes.list');
    }
}
