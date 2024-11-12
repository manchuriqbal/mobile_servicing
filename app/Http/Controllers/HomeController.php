<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index')->with([
            'billing' => Billing::latest()->paginate(),
        ]);
    }
}
