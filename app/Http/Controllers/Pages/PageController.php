<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function dashboard(){
        return view('pages.dashboard.index');
    }
}
