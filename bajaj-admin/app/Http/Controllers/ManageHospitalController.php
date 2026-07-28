<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageHospitalController extends Controller
{
    public function index()
    {
        return view('managehopital');
    }
}
