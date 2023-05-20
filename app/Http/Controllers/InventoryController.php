<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function show() 
    {
        return view('inventory.addBook');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    
        Inventory::create($request->all());
     
        return redirect()->route('inventory.show')
                        ->with('success','Record added successfully.');
    }
}
