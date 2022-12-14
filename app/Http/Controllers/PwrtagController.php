<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\ActivityLog as LogActivityModel;
use Carbon\CarbonPeriod;

class PwrtagController extends Controller
{
    public $traffic = array();

    public function getTraffic() {

        $visitorlog = array();
        $dateRange = CarbonPeriod::create('2022-09-24', '2022-09-30');

        foreach($dateRange as $date) {
            array_push($visitorlog, LogActivityModel::where('user_type', 'visitor')->whereDate('created_at', $date)->count());
        }

        return [
            'lables' => "24 Sept, 25 Sept, 26 Sept, 27 Sept, 28 Sept, 29 Sept, 30 Sept",
            'data' =>  implode(',',  $visitorlog)
        ];
    }

    public function getGender() {
        $gender = array();
        array_push($gender, Event::where('gender', 'Male')->count());
        array_push($gender, Event::where('gender', 'Female')->count());

        return [
            'lables' => "Male, Female",
            'data' =>  implode(',',  $gender)
        ];
    }

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
                    'tiket_number' => rand(1000, 9999),
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
                    ],
                'traffic' => $this->getTraffic(), 
                'gender' => $this->getGender(),                   
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
            \App\Helpers\ActivityLog::addToLog('User ' . Auth::user()->name . ' logging in');
            return redirect()->intended('admin');
        }
        else {
            // return response()->json(Response::HTTP_UNAUTHORIZED); //401
            return back()->with('success','Login attempt failed');
        }
    }

    public function checkTicket(Request $request)
    {
        try {
            $data = Event::where('email',$request->email)->first();            
            return response()->json(url('/ticket') . '/'.Hashids::encode($data->id)); //400
        }
        catch (Exception $e) {
            return response()->json(Response::HTTP_BAD_REQUEST); //400
        }

    }
}
