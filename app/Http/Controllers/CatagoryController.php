<?php

namespace App\Http\Controllers;

use App\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatagoryController extends Controller
{
    public function index()
    {
        return view('Admin.catagory.add-catagory');
    }

    public  function ManageCatagory(){
        return view('Admin.catagory.manage-catagory');
    }

    public  function  savecatagory(Request  $request){

//        return  $request->all();

//        $catagory=new Catagory();
//        $catagory->category_name=$request->category_name;
//        $catagory->category_description=$request->category_description;
//        $catagory->publication_status=$request->publication_status;
//        $catagory->save();

        Catagory::created($request->all());
//        DB::table('catagories')->insert([
//            'category_name' => $request->category_name,
//            'category_description' => $request->category_description,
//            'publication_status' => $request->publication_status,
//        ]);

        return redirect('/catagory/add-catagory')->with('message','succesfully add');
//        return view('Admin.catagory.add-catagory')->with($message);

    }
}
