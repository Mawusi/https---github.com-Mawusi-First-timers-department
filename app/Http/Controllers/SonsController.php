<?php

namespace App\Http\Controllers;

use App\Models\Sons;
use Illuminate\Http\Request;

class SonsController extends Controller
{
    //
    public function index()
    {
        $sons_details = Sons::paginate();

        return view('information.index', compact('sons_details'));
    }
}
