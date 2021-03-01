<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;

class ConsoleController extends BasedController
{

    public function __construct()
    {

    }

    public function dashboard(){
        return view('cms.pages.dashboard.board')
            ->with('cAdmin', count(User::where('who', 1)->get()));
    }
}
