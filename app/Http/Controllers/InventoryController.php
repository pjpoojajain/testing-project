<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendWelcomeEmail;

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
        $input = $request->all();
        $images=[];
            if($files=$request->file('images')){
                foreach($files as $file){
                    $name=$file->getClientOriginalName();
                    $file->move('image',$name);
                    $images[]=$name;
                }
            }
            /*Insert your data*/

            Inventory::insert( [
                'title'=>  $input['title'],
                'images'=>  implode("|",$images),
                'description' =>$input['description'],
                'author' =>$input['author'],
                'category' =>$input['category'],
                'published_year' =>$input['published_year'],
                'price' =>$input['price'],
                'condition' =>$input['condition'],
                'qty' =>$input['qty']
            ]);
            return redirect()->route('inventory.show')
                            ->with('success','Record added successfully.');              
    }
    public function destroy($id) 
       {
          $user = Inventory::where('id', $id)->firstorfail()->delete();
          echo ("User Record deleted successfully.");
          return redirect()->route('inventory.showLibrary');
       }
    public function sendWelcomeEmail()
    {
        $emailJobs = new SendWelcomeEmail();
        $this->dispatch($emailJobs);
    }
}
