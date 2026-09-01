<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TimMaminaController extends Controller
{
    private function getTimData()
    {
        // Ambil data user yang memiliki role 'terapis' dan branch_id = 1 (Malang)
        $timMalang = User::where('roles', 'like', '%terapis%')
            ->where('branch_id', 1)
            ->where(function ($q) {
                $q->where('is_active', 1)->orWhereNull('is_active');
            })
            ->get();

        // Ambil data user yang memiliki role 'terapis' dan branch_id = 2 (Kediri)
        $timKediri = User::where('roles', 'like', '%terapis%')
            ->where('branch_id', 2)
            ->where(function ($q) {
                $q->where('is_active', 1)->orWhereNull('is_active');
            })
            ->get();

        // Ambil data user yang memiliki role 'konselor'
        $konselor = User::where('roles', 'like', '%konselor%')
            ->where(function ($q) {
                $q->where('is_active', 1)->orWhereNull('is_active');
            })
            ->get();

        // Ambil data user yang memiliki role 'terapis' tapi berada di luar area Malang (Homecare)
        $timExtend = User::where('roles', 'like', '%terapis%')
            ->where('branch_id', 1)
            ->whereNotNull('area')
            ->where('area', '!=', '')
            ->where(function ($q) {
                $q->where('is_active', 1)->orWhereNull('is_active');
            })
            ->get();

        return compact(
            'timMalang',
            'timKediri',
            'konselor',
            'timExtend'
        );
    }

    public function index()
    {
        return view('main.tim-mamina.tim-mamina', $this->getTimData());
    }

    public function guestIndex()
    {
        return view('guest.terapis.terapis', $this->getTimData());
    }

    public function memberIndex()
    {
        return view('member.terapis.terapis', $this->getTimData());
    }
}
