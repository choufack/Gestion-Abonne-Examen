<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
        try{
            \DB::beginTransaction();
            $partcipant = Participant::create([
                
                'Nom'=> $request -> Nom,
                'Prenom'=> $request -> Prenom,
                'Age'=> $request -> Age,
                'Sexe'=> $request -> Sexe,
                'Profession'=> $request -> Profession,
                'Rue'=> $request -> Rue,
                'code_Postal'=> $request -> code_Postal,
                'Ville'=> $request ->Ville,
                'Pays'=> $request -> Pays,
                'Telephone'=> $request -> Telephone , 
                'Email'=> $request -> Email,
                  
             ]);
            \DB::commit();
            return response()->json(abonne,201);
        } catch(Throwable $th){
            return response()->json ('{"error":"impossible de sauvegarder"}'.$th, 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function show(abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, abonne $abonne)
    {
        //
        try{
            $abonne=abonne::find($id);
            $abonne->update($request->all());
            response()->json("{'Modification Reussie'}",200);
            return $abonne();
        } catch(Throwable $th){
            return response()->json ('{"error":"impossible de sauvegarder"}'.$th, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function destroy(abonne $abonne)
    {
        //
        try{
            $abonne = abonne::find($id);
            $abonne->delete();
            return response()->json(['message'=>'abonné supprimee avec success']);
        } catch(Throwable $th){
            return response()->json ('{"error":"impossible de sauvegarder"}'.$th, 404);
        }
    }
}
