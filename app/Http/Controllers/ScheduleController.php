<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;

class ScheduleController extends Controller
{
     public function schedule(Schedule $schedule,User $user)
    {
        return view('starts.home')->with(['schedules' => $schedule->get(),'users' => $user->get()]);  
    }
      public function create(Schedule $schedule,User $user)
    {
        return view('starts.create')->with(['schedules' => $schedule->get(),'users' => $user->get()]);  
    }
      public function edit(Schedule $schedule,User $user)
    {
        return view('starts.edit')->with(['schedules' => $schedule->get(),'users' => $user->get()]);  
    }
      public function table(Schedule $schedule,User $user)
    {
        return view('starts.table')->with(['schedules' => $schedule->get(),'users' => $user->get()]);  
    }
}
