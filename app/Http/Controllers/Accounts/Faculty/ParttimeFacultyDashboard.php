<?php

namespace App\Http\Controllers\Accounts\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParttimeFacultyDashboard extends Controller
{
    public function _view_parttime(){
        return view('accounts.faculties.part_time.dashboard');
    }
}
