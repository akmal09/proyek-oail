<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\File;
use App\Models\StartandIntersellarsMatterSpectra;
use App\Models\StartAndInterstellarsMatterImage;

class StartAndInterstellarsMattersController extends Controller
{
    public function image(){
        $datas = StartAndInterstellarsMatterImage::latest()->simplepaginate(10);
        // dd($data);
        return view("startandinster.index.image")->with(compact('datas'));
    }

    public function spectra(){
        $datas = StartandIntersellarsMatterSpectra::latest()->simplepaginate(10);
        // dd($data);
        return view("startandinster.index.spectra")->with(compact('datas'));
    }

    public function createImage(){
        return view("startandinster.create.image");
    }
    
    public function createSpectra(){
        return view("startandinster.create.spectra");
    }

    public function addImage(Request $request){
        $request->validate([
            'name'=>'required',
            'ra'=>'required',
            'dec'=>'required',
            'teleskop'=>'required',
            'detektor'=>'required',
            'filter'=>'required',
            'date'=>'required',
            'time'=>'required',
            'reduced_data'=>'required|file|mimes:zip',
            'raw_data'=>'required|file|mimes:zip'
        ]);

        // dd($request->date,$request->time);

        $dateAndTime = $request->date.' '.$request->time;
        // dd($dateAndTime);
        $rawData = $request->file('raw_data');
        // dd($rawData);
        $newRawData = rand().'.'.$rawData->getClientOriginalExtension();
        
        $reducedData = $request->file('reduced_data');
        $newReducedData = rand().'.'.$reducedData->getClientOriginalExtension();

        $starsAndInterstellarImage = array(
            'name' => $request->name,
            'ra' => $request->ra,
            'dec' => $request->dec,
            'teleskop' => $request->teleskop,
            'detektor' => $request->detektor,
            'filter' => $request->filter,
            'date_and_time' => $dateAndTime,
            'raw_data' => $newRawData,
            'reduced_data' => $newReducedData
        );
        $rawData->move(public_path('startandinterstellars/raw_data'), $newRawData);
        $reducedData->move(public_path('startandinterstellars/reduced_data'), $newReducedData);
        
        $savedData = StartAndInterstellarsMatterImage::create($starsAndInterstellarImage);

        return redirect('startandinster/image');
    }

    public function addSpectra(Request $request){
        // $request->validate([
        //     'name'=>'required',
        //     'ra'=>'required',
        //     'dec'=>'required',
        //     'teleskop'=>'required',
        //     'detektor'=>'required',
        //     'analisator'=>'required',
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
        $newRawData = rand().'.'.$rawData->getClientOriginalExtension();
        // dd($request,$newRawData);
        
        $reducedData = $request->file('reduced_data');
        $newReducedData = rand().'.'.$reducedData->getClientOriginalExtension();

        $starsAndInterstellarSpectra = array(
            'name' => $request->name,
            'ra' => $request->ra,
            'dec' => $request->dec,
            'teleskop' => $request->teleskop,
            'detektor' => $request->detektor,
            'analisator' => $request->analisator,
            'date_and_time' => $dateAndTime,
            'raw_data' => $newRawData,
            'reduced_data' => $newReducedData
        );
        $rawData->move(public_path('raw_data'), $newRawData);
        $reducedData->move(public_path('reduced_data'), $newReducedData);
        
        $savedData = StartandIntersellarsMatterSpectra::create($starsAndInterstellarSpectra);

        return redirect('startandinster/spectra');
    }
}
