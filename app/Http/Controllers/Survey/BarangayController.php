<?php

namespace App\Http\Controllers\Survey;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Barangay;

class BarangayController extends Controller
{
    public function index()
    {
        $barangays = Barangay::all();
        return view('survey.barangay.index', compact('barangays'));
    }

    public function showBarangay($id){

        $barangay = Barangay::where('id','=',$id)->first();
        return view('survey.barangay.show-barangay')->with('barangay', $barangay);

    }
}
