<?php

namespace mywork\Http\Controllers\Admin;

use Illuminate\Http\Request;
use mywork\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('backend.home');
    }
}
