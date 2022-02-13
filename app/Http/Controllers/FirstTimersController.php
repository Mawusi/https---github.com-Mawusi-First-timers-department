<?php

namespace App\Http\Controllers;

use App\Models\First_timer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstTimersController extends Controller
{
    //
    public function index(){
        $first_timers_details = First_timer::orderBy('id', 'ASC')->paginate();
        $count_first_timers = First_timer::all()->count();

        return view('church.all_churches', compact('first_timers_details', 'count_first_timers'));
    }

    public function avenor(){
        $avenor_first_timers = First_timer::where('zonal_church', 'Zonal Church Avenor')->orderBy('id', 'DESC')->paginate();
        $avenor_first_timers_count = $avenor_first_timers->count();

        return view('church.avenor', compact('avenor_first_timers', 'avenor_first_timers_count'));
    }

    public function laa(){
        $laa_first_timers = First_timer::where('zonal_church', 'Zonal Church LAA')->orderBy('id', 'DESC')->paginate();
        $laa_first_timers_count = $laa_first_timers->count();

        return view('church.laa', compact('laa_first_timers', 'laa_first_timers_count'));
    }
}


