<?php

namespace App\Http\Controllers;

use App\Models\CovidTracker;
use Illuminate\Http\Request;

class CovidTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(CovidTracker::orderBy('id','DESC')->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CovidTracker  $covidTracker
     * @return \Illuminate\Http\Response
     */
    public function show(CovidTracker $covidTracker)
    {
        return response()->json($covidTracker); 
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $covidTracker = new CovidTracker;
        $covidTracker->country = $request->country;
        $covidTracker->month = $request->month;
        $covidTracker->deaths = $request->deaths;
        $covidTracker->recovered = $request->recovered;
        $covidTracker->active_case = $request->active_case;
        $covidTracker->save();

        return response()->json(['created'=>201]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $covid = CovidTracker::find($id);

        $covid->update($request->all());

        return response()->json(['updated'=>200]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $covid = CovidTracker::find($id);
        $covid->delete();

        return response()->json(['deleted'=>200]);

    }
}
