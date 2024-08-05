<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaigns;
class Campaigncontroller extends Controller
{
   
    public function index(){
        $data['campaigns'] =  Campaigns::all();
        return view('campaigns.index',$data);
    }
//---- create 

    public function create(){
        return view('campaigns.create');
    }
    //---for store data
    public function store(Request $request){
        
//---for image uploads
                $image = '';
                if($request->image && $request->hasFile('image')){
                $file = $request->image;
                $filename = time().'-'.rand(1000,100000).'-'. $file->getClientOriginalName();
                $path = public_path().'/uploads';
                $file->move($path, $filename);
                $image = $filename;
                }
//---end image uploads

        $data =[
            'campaign' =>$request->get('campaign'),
            'description' =>$request->get('description'),
            'donation' =>$request->get('donation'), 
            'category' =>$request->get('category'),
            'status' =>$request->get('status'),
            'image' =>$image
        ];

        
        Campaigns::create($data);
        return redirect()->route('campaign.index');
    }
    //---end store data

    //---edit function 
    public function edit($id){
        if(!$id){
            return redirect()->back();
        }

        $campaign = Campaigns::find($id);
        if($campaign){
            return view('campaigns.edit', compact('campaign'));
        }
        return redirect()-back();
    }
           
        
    //---updates
    public function update(Request $request, $id)
    {
        if (!$id) {
            return redirect()->back();
        }
         // Validate the request  in controller
         $request->validate([
            'campaign' => 'required|string|max:255',
            'description' => 'required|string',
            'donation' => 'required|numeric',
            'category' => 'required|string|max:255',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $campaign = Campaigns::find($id);
        if ($campaign)
         {
            $image = '';
            if ($request->image && $request->hasFile('image')) {
                $delete_path = public_path().'/uploads'.$campaign->image;
                $file = $request->image;
                $filename = time() . '-' . rand(1000, 100000) . '-' . $file->getClientOriginalName();
                $path = public_path().'/uploads';
                $file->move($path, $filename);
                $image = $filename;
            }
        }
        $campaign=Campaigns::find($id);
        if ($campaign) {

            $data = [
                'campaign' => $request->get('campaign'),
                'description' => $request->get('description'),
                'donation' => $request->get('donation'),
                'category' => $request->get('category'),
                'status' => $request->get('status'),
                'image' => $image
            ];
           Campaigns::where('id',$id)->update($data);
            return redirect()->route('campaign.index');
        }
    
    
        return redirect()->back();
    }

    
    // Delete function
    public function delete($id)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $campaign = Campaigns::find($id);
        if ($campaign) {
            $campaign->delete();
        }
    
        return redirect()->back();
    }
}



