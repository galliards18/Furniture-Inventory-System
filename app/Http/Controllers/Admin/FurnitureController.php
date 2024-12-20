<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function index()
    {
        $furnitures = Furniture::all();
        return view('admin.furnitures.index', compact('furnitures'));
    }

    public function create()
    {
        return view('admin.furnitures.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'material' => 'required|string',
            'quantity' => 'required|integer',
        ]);

        Furniture::create($request->all());
        return redirect()->route('furnitures.index')->with('success', 'Furniture created successfully.');
    }

    public function edit(Furniture $furniture)
    {
        return view('admin.furnitures.edit', compact('furniture'));
    }

    public function update(Request $request, Furniture $furniture)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'material' => 'required|string',
            'quantity' => 'required|integer',
        ]);

        $furniture->update($request->all());
        return redirect()->route('furnitures.index')->with('success', 'Furniture updated successfully.');
    }

    public function destroy(Furniture $furniture)
    {
        $furniture->delete();
        return redirect()->route('furnitures.index')->with('success', 'Furniture deleted successfully.');
    }
}
