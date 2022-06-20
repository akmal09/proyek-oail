<?php

namespace App\Http\Controllers;

use App\Models\Astrophotography;
use Illuminate\Http\Request;


class AstrophotographyController extends Controller
{

    public function index(){
        $astrophotography = Astrophotography::latest()->simplepaginate(10);
        return view('astrophotography.index')->with(compact('astrophotography'));
    }

    public function create(){
        return view('Astrophotography.create');
    }

    public function addAstrophotography(Request $request){
        $request->validate([
            "name"=>"required",
            "ra"=>"required",
            "dec"=>"required",
            "teleskop"=>"required",
            "detektor"=>"required",
            "analisator"=>"required",
            "date"=>"required",
            "time"=>"required",
            "final_image"=>"required",
            "raw_data"=>"required",
        ]);

        $dateAndTime = $request->date.' '.$request->time;
        $rawData = $request->file('final_image');
        $newRawData = rand().'.'.$rawData->getClientOriginalExtension();

        $finalImage = $request->file('raw_data');
        $newFinalImage = rand().'.'.$finalImage->getClientOriginalExtension();

        $astrophotography = array(
            "name"=>$request->name,
            "ra"=>$request->ra,
            "dec"=>$request->dec,
            "teleskop"=>$request->teleskop,
            "detektor"=>$request->detektor,
            "analisator"=>$request->analisator,
            "date_and_time"=>$dateAndTime,
            "raw_data"=>$request->raw_data,
            "final_image"=>$request->final_image
        );
        $rawData->move(public_path('astrophotography/raw_data'), $newRawData);
        $finalImage->move(public_path('astrophotography/final_image'), $newFinalImage);
        
        $saveAstrophotography = Astrophotography::create($astrophotography);

        return redirect(route('index_astrophotography'));

    }
}
