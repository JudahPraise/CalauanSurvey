<?php

namespace App\Http\Controllers\Survey\Forms;

use App\Barangay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamilyInformation extends Controller
{
    public function index(){
        
        $barangays = Barangay::all();
        return view('survey.forms.family-information', compact('barangays'));
    }
}
