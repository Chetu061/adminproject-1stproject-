<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
public function admin()
{
    return view('admin');
}
public function index()
{
    
$data=Category::all();
    return view('category.index',compact('data'));
}

public function create()
{
    return view('category.create');
}


public function store(Request $request )
{ 
    $request->validate(
    ['title'=>'required',
    'status'=>'required'
    ]);
    $data=new Category();
    $data->title=$request->title;
    $data->status=$request->status;
    //dd($user);

    $data->save();
    return redirect()->route('category.index')->with('message',"Data Added Successfully!");
}
public function edit($id)
{
    $data=Category::find($id);
    return view('category.edit',compact('data'));
}
public function update(Request $request,$id)
{
    $data=Category::find($id);
    $data->title=$request->title;
    $data->status=$request->status;
    //dd($user);

    $data->save();
    return redirect()->route('category.index')->with('message',"Data Update Successfully!");
}
public function delete($id)
{
    $data=Category::find($id);
    $data->delete();
    return redirect()->route('category.index')->with('message',"Data Delete Successfully!");
}
}
