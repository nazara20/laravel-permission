<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresentController extends Controller
{
    public function index()
    {
        return view('admin.present');
    }
}
