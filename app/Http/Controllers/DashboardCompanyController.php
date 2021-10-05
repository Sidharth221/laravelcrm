<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;

class DashboardCompanyController extends Controller
{
    public function show_companies(){
        $companies = company::all();
        return view ('dashboardCompany', ['companies'=>$companies]);
    }
}
