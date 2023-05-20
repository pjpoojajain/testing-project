<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function index() 
    {
        return view('inventory.addBook');
    }

    public function showLibrary() 
    {
        $inventories = DB::table('inventories')->get();
        return view('inventory.allBook', ["data"=>$inventories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        if($request->flag == 0) {

            Inventory::create($request->all());
         
            return redirect()->route('inventory.show')
                            ->with('success','Record added successfully.');
        }else{
        
            Inventory::update($request->all());
         
            return redirect()->route('inventory.show')
                            ->with('success','Record updated successfully.');
        }               
    }
}
