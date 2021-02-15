<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tennis;

class CRUDController extends Controller
{
    public function showForm(){
        return view('form');
    }

    public function add(Request $request){
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
}
