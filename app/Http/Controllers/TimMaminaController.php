<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TimMaminaController extends Controller
{
    public function index()
    {
        // Ambil data user yang memiliki role 'terapis' dan branch_id = 1 (Malang)
        $timMalang = User::where('roles', 'like', '%terapis%')
            ->where('branch_id', 1)
            ->where('is_active', 1)
            ->get();

        // Ambil data user yang memiliki role 'terapis' dan branch_id = 2 (Kediri)
        $timKediri = User::where('roles', 'like', '%terapis%')
            ->where('branch_id', 2)
            ->where('is_active', 1)
            ->get();

        // Ambil data user yang memiliki role 'konselor'
        $konselor = User::where('roles', 'like', '%konselor%')
            ->where('is_active', 1)
            ->get();

        // Ambil data user yang memiliki role 'terapis' tapi berada di luar area Malang (Homecare)
        // Kita asumsikan branch_id 1 (Malang) tapi area nya bukan string kosong atau memiliki id tertentu
        // Untuk saat ini bisa kita jadikan area != kosong sebagai Homecare Luar Malang, atau bisa disesuaikan nanti
        $timExtend = User::where('roles', 'like', '%terapis%')
            ->where('branch_id', 1) // masih di bawah naungan Malang?
            ->whereNotNull('area')
            ->where('area', '!=', '')
            ->where('is_active', 1)
            ->get();

        return view('main.tim-mamina.tim-mamina', compact(
            'timMalang',
            'timKediri',
            'konselor',
            'timExtend'
        ));
    }
}
