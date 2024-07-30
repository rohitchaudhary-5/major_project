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


    public function create(){
        return view('campaigns.create');
    }
    public function store(Request $request){

        $data =[
            'campaign' =>$request->get('campaign'),
            'description' =>$request->get('description'),
            'donation' =>$request->get('donation'), 
            'category' =>$request->get('category'),
            'status' =>$request->get('status'),
        ];

        Campaigns::create($data);
        return redirect()->route('campaigns.index');
    }
    public function update(Request $request, $id){
        if(!$id){
            return redirect()->back();
        }

        $campaign = Campaigns::find($id);
        if($campaign){
            $data =[
                'campaign' =>$request->get('campaign'),
                'description' =>$request->get('description'),
                'donation' =>$request->get('donatoin'),
                'category' =>$request->get('category'),
                'status' =>$request->get('status'),
            ];
    
    
    
            Campaigns:: where('id', $id)->update($data);
            return redirect()->route('campaign.index');
        }
        return redirect()->back();
    }
    public function edit($id){
        if(!$id){
            return redirect()->back();
        }

        $campaign = Campaigns::find($id);
        if($campaign){
            return view('campaigns.edit', compact('campaign'));
        }
        return redirect()->back();
    }

    public function delete($id){
            if(!$id){
                return redirect()-back();
            }
    
            $campaign = Campaigns::find($id);
                if($campaign){
                    $campaign->delete();
                }
                return redirect()->back();
        }
    }


