<?php

namespace App\Http\Controllers;

use App\Models\CarDetail;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class CarDetailController extends Controller
{
    public function index()
    {
        //display listing of the resource

        $CarDetail=CarDetail::all();
        return view('car-listing',compact ('CarDetail'));
     
    }

    public function create()
    {
        //show the form for creating a new resource

        return view('uploadcar');
    }

    public function store(Request $request)
    {
        if($contents=$request->file('carpic')){
            $name=$contents->getClientOriginalName();
            $contents->move('uploads',$name);
            $CarDetail = new CarDetail([
                "user_id"=>$request->get('user_id'),
                "carname" => $request->get('carname'),
                "brand" => $request->get('brand'),
                "color" => $request->get('color'),
                "carprice"=> $request->get('carprice'),
                "carpic" => $name

            ]);

            $CarDetail->save();
        
            return redirect(url('home'));
        }

}
}
