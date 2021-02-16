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
        $model = new Tennis();
        $res = $model::create($request -> all());
        echo 'success!';
    } 

    public function search(Request $request){
        // search "name"="ggg" method 2
        $res = Tennis::where("Ranking","=","10") -> get();
        var_dump($res);
    }

    public function update(Request $request){
        $res = Tennis::where("Gender","=","women") -> update(['Points'=>'123']);
    } 

    public function delete(Request $request){
        $res = Tennis::where("Date","=",null) -> delete();
    }

    // pagination
    public function page(){
        $data = Tennis::orderBy('Tournaments','ASC') -> paginate(10);
        return view('page',compact('data'));  
    }
}
