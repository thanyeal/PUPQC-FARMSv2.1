<?php

namespace App\Http\Controllers\Accounts\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegularFacultyDashboard extends Controller
{
    public function _view_regular(){
        return view('accounts.faculties.regular.dashboard');
    }
}
