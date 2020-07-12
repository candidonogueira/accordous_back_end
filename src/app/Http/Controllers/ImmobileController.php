<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Immobile;

class ImmobileController extends Controller
{
    //
    public function index(){

        $immobles = Immobile::all();
        return response()->json([
            'immobles' => $immobles
        ]);

    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'street'        => 'required|max:255',
            'number'        => 'required',
            'neighborhood'  => 'required|max:255',
            'city'          => 'required|max:255',
            'state'         => 'required|max:2',
            'email_contact' => 'required|max:255', 
        ]);

       
        $immobile = new Immobile;
        $immobile->street           = $request->input('street');
        $immobile->number           = $request->input('number');
        $immobile->complement       = $request->input('complement');
        $immobile->neighborhood     = $request->input('neighborhood');
        $immobile->city             = $request->input('city');
        $immobile->state            = $request->input('state');
        $immobile->email_contact    = $request->input('email_contact');
        $immobile->save();

        return response()->json([
            'status' => 'success',
            'message' => 'A Immobile has been successfully added.'
        ]);

    }
}
