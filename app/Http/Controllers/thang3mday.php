<?php

namespace App\Http\Controllers;

use App\Models\Nhasanxuat;
use Illuminate\Http\Request;

class Thang3mday extends Controller
{
    public function get_all()
    {
        $nsx = Nhasanxuat::all();
        return view('nsx.index', ['nsx' => $nsx]);
    }
}
