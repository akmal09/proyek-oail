<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\File;
use App\Models\StartAndInterstellarsMatterImage;

class StartAndInterstellarsMattersController extends Controller
{
    public function index(){

    }

    public function create(){
        return view("startandinster.create");
    }

    public function addImage(Request $request){
        // $request->validate([
        //     'object_name'=>'required',
        //     'ra'=>'required',
        //     'dec'=>'required',
        //     'telescope'=>'required',
        //     'detector'=>'required',
        //     'filter'=>'required',
        //     'date'=>'required',
        //     'time'=>'required',
        //     'reduced_data'=>'required|file|mimes:zip',
        //     'raw_data'=>'required|file|mimes:zip'
        // ]);

        // dd($request->date,$request->time);

        $dateAndTime = $request->date.' '.$request->time;
        // dd($dateAndTime);
        $rawData = $request->file('raw_data');
        // dd($rawData);
        $newRawData = $rawData->getClientOriginalName().'.'.$rawData->getClientOriginalExtension();
        
        $reducedData = $request->file('reduced_data');
        $newReducedData = $reducedData->getClientOriginalName().'.'.$reducedData->getClientOriginalExtension();

        $starsAndInterstellar = array(
            'name' => $request->object_name,
            'ra' => $request->ra,
            'dec' => $request->dec,
            'teleskop' => $request->telescope,
            'detektor' => $request->detector,
            'filter' => $request->filter,
            'date_and_time' => $dateAndTime,
            'raw_data' => $newRawData,
            'reduced_data' => $newReducedData
        );
        $rawData->move(public_path('raw_data'), $newRawData);
        $reducedData->move(public_path('reduced_data'), $newReducedData);
        
        $savedData = StartAndInterstellarsMatterImage::create($starsAndInterstellar);

        dd($starsAndInterstellar);
    }
}
