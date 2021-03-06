<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangay;

class SurveyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barangays = Barangay::all();
        return view('survey.home', compact('barangays'));
    }
}
