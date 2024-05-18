<?php

namespace App\Http\Controllers\Accounts\Director;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectorDashboard extends Controller
{
    public function _view_director(){
        return view('accounts.director.dashboard');
    }
}
