<?php

namespace App\Http\Controllers;

use App\Models\SolarSystemObjectImage;
use App\Models\SolarSystemObjectSpectra;
use Illuminate\Http\Request;
use App\Http\Controllers\File;


class SolarSystemObjectController extends Controller
{
    public function index(){
        $images = SolarSystemObjectImage::latest()->simplepaginate(10);
        $spectra = SolarSystemObjectSpectra::latest()->simplepaginate(10);

        return view('solarsystemobject.index')->with(compact('images','spectra'));
    }

    public function createImage(){
        return view('solarsystemobject.create.image');
    }
    
    public function createSpectra(){
        return view('solarsystemobject.create.spectra');
    }

    public function addImage(Request $request){
        $request->validate([
            'object_name'=>'required',
            'teleskop'=>'required',
            'detektor'=>'required',
            'filter'=>'required',
            'date'=>'required',
            'time'=>'required',
            'reduced_data'=>'required|file|mimes:zip',
            'raw_data'=>'required|file|mimes:zip'
        ]);

        $dateAndTime = $request->date.' '.$request->time;
        $rawData = $request->file('raw_data');
        $newRawData = rand().'.'.$rawData->getClientOriginalExtension();

        $reducedData = $request->file('reduced_data');
        $newReducedData = rand().'.'.$reducedData->getClientOriginalExtension();

        $solarSystemObjectImage = array(
            'name'=> $request->object_name,
            'teleskop'=> $request->teleskop,
            'detektor'=> $request->detektor,
            'filter'=> $request->filter,
            'date_and_time'=> $dateAndTime,
            'reduced_data'=> $request->reduced_data,
            'raw_data'=> $request->raw_data
        );
        $rawData->move(public_path('solarsystemobject/raw_data'), $newRawData);
        $reducedData->move(public_path('solarsystemobject/reduced_data'), $newReducedData);

        $savedData = SolarSystemObjectImage::create($solarSystemObjectImage);

        return redirect(route('solar_index'))->with("message", "success");
    }

    public function addSpectra(Request $request){
        $request->validate([
            'name'=>'required',
            'teleskop'=>'required',
            'detektor'=>'required',
            'analisator'=>'required',
            'date'=>'required',
            'time'=>'required',
            'reduced_data'=>'required|file|mimes:zip',
            'raw_data'=>'required|file|mimes:zip'
        ]);

        $dateAndTime = $request->date.' '.$request->time;
        $rawData = $request->file('raw_data');
        $newRawData = rand().'.'.$rawData->getClientOriginalExtension();

        $reducedData = $request->file('reduced_data');
        $newReducedData = rand().'.'.$reducedData->getClientOriginalExtension();

        // dd($request);
        $solarSystemObjectSpectra = array(
            'name'=> $request->name,
            'teleskop'=> $request->teleskop,
            'detektor'=> $request->detektor,
            'analisator'=> $request->analisator,
            'date_and_time'=> $dateAndTime,
            'reduced_data'=> $newReducedData,
            'raw_data'=> $newRawData
        );
        $rawData->move(public_path('solarsystemobject/raw_data'), $newRawData);
        $reducedData->move(public_path('solarsystemobject/reduced_data'), $newReducedData);

        $savedData = SolarSystemObjectSpectra::create($solarSystemObjectSpectra);

        return redirect(route("solar_index"))->with("message", "success");
    }
}
