<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class PwrtagController extends Controller
{
    public function register(Request $request)
    {   
        try {
// at most 40 participants
            User::create([
                'name' => $request->name,
                'ic_number' => $request->ic,
                'gym_name' => $request->gymName,
                'email' => $request->email,
                'gender' => $request->gender,
                'weight' => $request->weight,
                'tiket_number' => rand(0000, 9999),
            ]);
            return response()->json(Response::HTTP_ACCEPTED);
        }
        catch (Exception $e) {
            return response()->json(Response::HTTP_BAD_REQUEST);
        }
        
    }

    public function getUsersData() 
    {
        return view('admin')->with(['datas' => User::all()]);
    }
}
