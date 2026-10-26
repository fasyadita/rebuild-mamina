<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    /**
     * Main landing page (/)
     */
    public function main()
    {
        return view('welcome');
    }

    /**
     * Guest landing page (/guest)
     */
    public function guest()
    {
        return view('welcome-guest');
    }

    /**
     * Member landing page (/member)
     */
    public function member()
    {
        return view('welcome-member');
    }
}
