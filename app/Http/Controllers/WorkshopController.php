<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function detail($slug)
    {
        return view('detail-ws', compact('slug'));
    }
}
