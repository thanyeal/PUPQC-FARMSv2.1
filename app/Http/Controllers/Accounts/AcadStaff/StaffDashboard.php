<?php

namespace App\Http\Controllers\Accounts\AcadStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffDashboard extends Controller
{
    public function _view_staff(){
        return view('accounts.acadstaff.dashboard');
        // $user_id = Auth::user()->id;
        // $user = User::where('user_id', $user_id)->firstOrFail();
        // $name = $user->first_name;
        // $time_now = Carbon::now('Asia/Manila');
        // $h = $time_now->format('H');	
        //     if ($h >= '0' && $h < '12') {
        //         $greeting = 'Good Morning,';
        //     }
        //     else if ($h >= '12' && $h < '18') {
        //         $greeting = 'Good Afternoon,';
        //     }
        //     else if ($h >= '18' && $h < '24') {
        //         $greeting = 'Good Evening,';
        //     }
        // return view('accounts/acadhead/dashboard', compact('name','greeting'));
    }
}
