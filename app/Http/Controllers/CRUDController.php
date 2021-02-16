<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tennis;
use App\Models\User;

class CRUDController extends Controller
{
    public function showForm(){
        return view('form');
    }

    public function add(\App\Http\Requests\RequestValidation $request){
        $validated = $request->validated();
        
        // $validatedData = $request->validate([
        //     'Date' => ['required', 'max:255'],
        //     'Gender' => ['required', 'max:255', 'string'],
        //     'Type' => ['required', 'string','max:255'],
        //     'Player' => ['required', 'string', 'max:50'],
        //     'Country' => ['required', 'string', 'max:100'],
        //     'Age' => ['required','integer', 'max:120', 'min:0'],
        //     'Points' => ['required','numeric', 'max:100'],
        //     'Tournaments' => ['required','numeric', 'max:100'],
        // ]);
        $model = new Tennis();
        $res = $model::create($request -> all());
    } 

    public function search(Request $request){
        // search "name"="ggg" method 2
        $res = Tennis::where("Ranking","=","1") -> get();
    }

    public function update(Request $request){
        $res = Tennis::where("Gender","=","women") -> update(['Points'=>'123']);
    } 

    public function delete(Request $request){
        $res = Tennis::where("Date","=",null) -> delete();
    }

    // pagination
    public function page(){
        $data = Tennis::paginate(5);
        return view('page',compact('data'));  
    }
}
