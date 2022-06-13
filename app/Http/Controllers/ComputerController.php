<?php

namespace App\Http\Controllers;

use App\Models\computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Computer::orderBy('id','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computer = new Computer;
        $computer->item = $request->item;
        $computer->manufacturer = $request->manufacturer;
        $computer->description = $request->description;
        $computer->price = $request->price;
        $computer->quantity = $request->quantity;
        $computer->save();

        return response()->json(['created'=>201]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function show(computer $computer)
    {
        return response()->json($computer); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coms= Computer::find($id);
        $coms->update($request->only('item','manufacturer','description','price','quantity'));

        return response()->json(['updated'=>201]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coms = Computer::find($id);
        $coms->delete();

        return response()->json(['deleted'=>200]);
    }
    
}
