<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index($room = '建物です')
    {
        return view('building.index')->with(['room' => $room]);
    }
}
