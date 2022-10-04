<?php

namespace App\Http\Controllers;

use App\Models\CarDetail;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use DB;

class CarDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $CarDetail=CarDetail::all();
        return view('car-listing',compact ('CarDetail'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploadcar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($contents=$request->file('carpic')){
            $name=$contents->getClientOriginalName();
            $contents->move('uploads',$name);
            $CarDetail = new CarDetail([
                "user_id"=>$request->get('user_id'),
                "carname" => $request->get('carname'),
                'carprice'=> $request->get('carprice'),
                'carmodel'=> $request->get('carmodel'),
                'carseats'=> $request->get('carseats'),
                'address'=> $request->get('address'),
                'personnumber'=> $request->get('personnumber'),
                'posttype'=> $request->get('posttype'),
                'location'=> $request->get('location'),
                "carpic" => $name

            ]);

            $CarDetail->save();
        
            return redirect(url('home'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarDetail  $carDetail
     * @return \Illuminate\Http\Response
     */
    public function show($carid)
    {
    $CarDetail = CarDetail::select('*')
    ->where('id', '=', $carid)
    ->get();
    return view('cardetail',compact('CarDetail'));
    }
    

    public function withdriver()
    {
    $CarDetail = CarDetail::select('*')
    ->where('posttype', '=', 'With Driver')
    ->get();
    return view('admin/cartype',compact('CarDetail'));
    }

    public function withoutdriver()
    {
    $CarDetail = CarDetail::select('*')
    ->where('posttype', '=', 'Without Driver')
    ->get();
    return view('admin/cartype',compact('CarDetail'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarDetail  $carDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($carid )
    {
        
        $CarDetail = CarDetail::select('*')
        ->where('id', '=', $carid)
        ->get();
        return view('editcar',compact('CarDetail'));
   // return view('editcar',compact('carDetail'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarDetail  $carDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarDetail $car_details)
    {

        $data=$request->validate([
                'carname'=>'required',
                'carprice'=>'required',
                'carmodel'=>'required',
                'carseats'=>'required',
                'address'=>'required',
                'personnumber'=>'required',
                'posttype'=>'required',
                'location'=>'required',
    
            ]);
            $car_details->update($data);
            return redirect(url('car-listing'));
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarDetail  $carDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarDetail $car_details)
    {
        $car_details->delete();
        return redirect(url('dashboard'));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userpost($id)
    {
        

    $CarDetail = CarDetail::select('*')
    ->where('user_id', '=', $id)
    ->get();
    return view('myposts',compact('CarDetail'));

     
    }

    public function allcars()
    {
        $CarDetail=CarDetail::all();
        return view('admin/cartype',compact ('CarDetail'));
     
    }

    public function delete(Users $users)
    {
        $users->delete();
        return redirect(url('home'));
    }
}
