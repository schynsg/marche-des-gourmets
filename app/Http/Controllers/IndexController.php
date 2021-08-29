<?php

namespace App\Http\Controllers;

use App\Models\Params;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {
        $parters = Partner::all();
        $params = Params::first();

        return view('index', compact('params','parters'));
    }
}
