<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Pizza;

class PizzaController extends Controller
{
    //

    public function update(Request $request, $id){

        $request->validate([
            'pizzaName'=>'required|max:20',
            'pizzaPrice'=>'required|numeric',
            'pizzaDesc'=>'required|min:20',
            'pizzaImage'=>'required|mimes:jpeg,png,jpg'
        ]);
  
        $pizzaImage = $request->file('pizzaImage');
        $imageName = "img/".time()."_".$pizzaImage->getClientOriginalName();
   
        $request->pizzaImage->move(public_path('img'), $imageName);
     
        $pizz = Pizza::find($id);

        $pizz->name = $request->pizzaName;
        $pizz->price = $request->pizzaPrice;
        $pizz->description = $request->pizzaDesc;
        $pizz->image = $imageName;
        $pizz->save();
 
        return redirect()->back();
    }

    public function editPizza($id){

        $pizz = Pizza::find($id);
        
        return view('editPizza',['pizz'=>$pizz]);
    }

    public function delete($id){

        $pi = Pizza::find($id);
        $pi->delete();

        //return view nya harus ke allpizza view nanti

        return view('hAdmin');

    }

    //ini buat ke page view delete nya aja
    public function deletePizza($id){

        $lists = Pizza::find($id);

        return view('deletePizza',['lists'=>$lists]);
        
    }

    public function add(){

        return view('addPizza');
    }

    public function store(Request $request){

        $request->validate([
            'pizzaName'=>'required|max:20',
            'pizzaPrice'=>'required|numeric',
            'pizzaDesc'=>'required|min:20',
            'pizzaImage'=>'required|mimes:jpeg,png,jpg'
        ]);
  
        $pizzaImage = $request->file('pizzaImage');
        $imageName = "img/".time()."_".$pizzaImage->getClientOriginalName();
   
        $request->pizzaImage->move(public_path('img'), $imageName);
     
        Pizza::create([
            'name' => $request->pizzaName,
            'description' => $request->pizzaDesc,
            'price' => $request->pizzaPrice,
            'image' => $imageName
        ]);
        
        return redirect()->back();
    }


}
