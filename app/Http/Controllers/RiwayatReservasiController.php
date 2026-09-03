<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RiwayatReservasiController extends Controller
{
    public function index()
    {
        $customerId = Auth::id();
        
        $reservations = DB::table('sales')
            ->where('customer_id', $customerId)
            ->orderBy('date', 'desc')
            ->get();
            
        $points = DB::table('user_points')
            ->where('customer_id', $customerId)
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('member.reservasi.reservasi', compact('reservations', 'points'));
    }
}
