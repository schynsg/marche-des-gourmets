<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {
        $texts = Text::all();
        $parters = Partner::all();

        return view('index', compact('texts', 'parters'));
    }
}
