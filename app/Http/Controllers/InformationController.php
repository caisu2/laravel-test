<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Information::all();
        
        return response()->json($informations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inforamtion = new Information();

        $inforamtion->first_name = $request->input('first_name');
        $inforamtion->last_name = $request->input('last_name');
        $inforamtion->age = $request->input('age');
        $inforamtion->gender = $request->input('gender');
        $inforamtion->address = $request->input('address');

        $inforamtion->save();

        return response()->json(["message" => 'Information Successfully Added!', "data" => $inforamtion]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $inforamtion = Information::find($id);
        $inforamtion->first_name = $request->input('first_name');
        $inforamtion->last_name = $request->input('last_name');
        $inforamtion->age = $request->input('age');
        $inforamtion->gender = $request->input('gender');
        $inforamtion->address = $request->input('address');

        $inforamtion->save();

        return response()->json(["message" => 'Information Successfully Updated!', "data" => $inforamtion, "status" => 200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inforamtion = Information::find($id);
        $inforamtion->delete();

        return response()->json(['message' => "Information Deleted Successfully", 'status' => 200]);
    }
}
