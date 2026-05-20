<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class JadwalTerapisController extends Controller
{
    /**
     * Display a listing of the therapist schedules.
     */
    public function index()
    {
        try {
            // Get all active users with role 'terapis'
            $terapis = User::where('roles', 'like', '%terapis%')
                ->where('is_active', 1)
                ->get();
        } catch (\Exception $e) {
            // Fallback to empty collection if database or table doesn't exist yet
            $terapis = collect();
        }

        return view('main.jadwal-terapis.jadwal-terapis', compact('terapis'));
    }

    /**
     * Display the detail schedule for a specific therapist.
     */
    public function detail(Request $request)
    {
        $id = $request->query('id');
        $terapi = null;
        
        if ($id) {
            try {
                $terapi = User::find($id);
            } catch (\Exception $e) {
                // DB connection or query error fallback
            }
        }

        return view('main.jadwal-terapis.detail-jadwal', compact('terapi'));
    }
}
