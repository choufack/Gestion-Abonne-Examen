<?php

namespace App\Http\Controllers;

use App\Models\motivation;
use Illuminate\Http\Request;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $motivation = motivation::all();
       return response()->json($motivation,200);
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
    public function save(Request $request)
    {
        //
        $query = DB::table('motivation')->insert([
            'intitule' => $request->input('intitule'),
            
        ]);
        return view('formulaire')->with('success', "Account successfully registered.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function show(motivation $motivation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try {
            DB::beginTransaction();
            $reg = motivation::find($id);
            DB::commit();
        return view("update_motivation" , compact("reg"));
        } catch (\Throwable $th) {
            dd($th);
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, motivation $motivation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function destroy(motivation $motivation)
    {
        //
        try{
            DB::beginTransaction();
            motivation::find($id)-> delete();
            DB::commit();
            return view("liste-abonné");
        } catch(\Throwable $th){
            return back();
        }
    }
}
