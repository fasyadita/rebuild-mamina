<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kid;
use App\Models\Growth;

class AnakController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $kids = collect();
        $growths = collect();

        if ($user) {

            $kids = Kid::where('customer_id', $user->id)->get();

            $kidIds = $kids->pluck('id');
            $growths = Growth::whereIn('child_id', $kidIds)
                ->latest()
                ->get();
        }

        return view('member.anak.anak', compact('kids', 'growths'));
    }

    public function storeKids(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birthdate' => 'required|date',
            'sex' => 'required',
        ]);

        Kid::create([
            'customer_id' => auth()->id(),
            'name' => $request->name,
            'birthdate' => $request->birthdate,
            'sex' => $request->sex,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Data anak berhasil ditambahkan');
    }

    public function storeGrowth(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            $kids = Kid::where('customer_id', $user->id)->get();
            if ($kids->isEmpty()) {
                return back()->with('error', 'Anda harus menambahkan data anak terlebih dahulu');
            }
        }

        $request->validate([
            'kid_id' => 'required',
            'date' => 'required|date',
            'weight' => 'required',
            'height' => 'required',
            'head' => 'required',
        ]);

        $kid = Kid::find($request->kid_id);
        $age = null;
        if ($kid && $kid->birthdate) {
            $age = \Carbon\Carbon::parse($kid->birthdate)->diffInMonths(\Carbon\Carbon::parse($request->date));
        }

        Growth::create([
            'child_id' => $request->kid_id,
            'record_date' => $request->date,
            'age' => $age,
            'weight' => $request->weight,
            'height' => $request->height,
            'head_circumference' => $request->head,
        ]);

        return back()->with('success', 'Data pertumbuhan berhasil ditambahkan');
    }
}
