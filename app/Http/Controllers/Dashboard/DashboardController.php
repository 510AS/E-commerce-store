<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $main_cat = MainCategory::all();
        $brand = Brand::all();
        return \view('dashboard.home',\compact('brand','main_cat'));
    }
}
