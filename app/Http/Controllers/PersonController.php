<?php

namespace App\Http\Controllers;
use App\Models\Person;
use App\Models\City;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function all(){
        $people = Person::all();
        $cities = City::all();
        return view('people',['people'=>$people,'cities'=>$cities]);
    }
    public function create(Request $request){
        $input=$request->all();
        Person::create($input);
        return redirect('/people');
    }
  
    public function delete(Request $request,$id){
        $person=Person::find($id);
        $person->delete();
        
        return redirect('/people');
    }
}
