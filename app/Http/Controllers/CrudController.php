<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;
class CrudController extends Controller
{
    public function create(Request $request){
       
        return view('/create');
    }
    public function edit(Request $request,$id){
        $student = Crud::find($id);
        
        return view("edit",compact("student"));
    }





    public function listing(Request $request){
        $lists = Crud::all();
        return view('/listing',compact('lists'));


    }
    public function save(Request $request){
        $student = new Crud();
        $student->name=$request->name;
        $student->surename=$request->sure;
        $student->fathersname=$request->father;
        $student->save();
        return redirect('/listing');
    }
    public function update(Request $request,$id){
        // dd($request->all());
        $student = Crud::find($id);
        $student->name=$request->name;
        $student->surename=$request->sure;
        $student->fathersname=$request->father;
        $student->save();
        return redirect('/listing');
    }
    public function delete(Request $request,$id){
        $data = Crud::find($id)->delete();
       
        return redirect('/listing');
    }
}
