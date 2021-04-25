<?php

namespace App\Http\Controllers\Survey\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamilyInformation extends Controller
{
    public function index(){
        return view('survey.forms.family-information');
    }
}
