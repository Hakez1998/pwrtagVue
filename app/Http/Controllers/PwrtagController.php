<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;


class PwrtagController extends Controller
{
    public function register(Request $request)
    {   
        if(Event::count() < 40) {
            try {
                Event::create([
                    'name' => $request->name,
                    'ic_number' => $request->ic,
                    'gym_name' => $request->gymName,
                    'email' => $request->email,
                    'gender' => $request->gender,
                    'weight' => $request->weight,
                    'age' => $request->age,
                    'tiket_number' => rand(0000, 9999),
                ]);
                return response()->json(Response::HTTP_ACCEPTED);
            }
            catch (Exception $e) {
                return response()->json(Response::HTTP_BAD_REQUEST);
            }
        }
        else {
            return response()->json(Response::HTTP_NOT_ACCEPTABLE); //406
        }
            
        
    }

    public function getUsersData() 
    {
        if(Event::count() > 0) {
            $ages = round(Event::sum('age') / Event::count(),0);
        }
        else {
            $ages = 0;
        }

        return view('admin')
        ->with(
            [
                'datas' => Event::all(),
                'total' => 
                    [
                        'participant' => Event::count(),
                        'age' => $ages,
                        'heavyweight' => Event::where('weight', '>=', '60')->count(),
                        'lightweight' => Event::where('weight', '<', '60')->count(),
                    ]
            ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('admin');
        }
        else {
            // return response()->json(Response::HTTP_UNAUTHORIZED); //401
            return back()->with('success','Login attempt failed');
        }
    }

    public function generatePDF()
    {

    }
}
