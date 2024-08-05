<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donors;
class Donorcontroller extends Controller
{
    public function index(){
        $data['donors'] = Donors::all();
        return view('donors.index',$data);
    }
    public function create(){
        return view('donors.create');
    }
     
    public function store(Request $request){
        $data =[
                'name'=>$request->get('name'),
                'email'=>$request->get('email'),
                'password'=>$request->get('password'),
                'donation_amount'=>$request->get('donation_amount')

        ];
        Donors::create($data);
        return redirect()->route('donor.index');
    }

    public function edit($id){
        if(!$id){
            return redirect()->back();
        }
        $donor = Donors::find($id);
        if($donor){
            return view('donors.edit', compact('donor'));
        }
        return redirect()->back();
     }
    
    public function update(Request $request, $id){
        if(!$id){
            return redirect()->back();
        }
        $donor = Donors::find($id);
        if($donor){
        $data =[
                'name'=>$request->get('name'),
                'email'=>$request->get('email'),
                'password'=>$request->get('password'),
                'donation_amount'=>$request->get('donation_amount')

        ];
        Donors::where ('id', $id)->update($data);
        return redirect()->route('donor.index');
}
return redirect()-back();
 }




 public function delete($id){
    if(!$id){
        return redirect()->back();
    }
    $donor = Donors::find($id);
    if($donor){
        $donor->delete();
    }
    return redirect()->back();
 }
}
