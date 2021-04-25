<?php

namespace App\Http\Controllers\Survey\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){

        return view('survey.forms.index');

    }
}
