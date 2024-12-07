<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReadingController extends Controller
{
    public function index()
    {
        // $readings = DB::table('readings')->get(); // Mengambil semua data dari tabel 'readings'
        // return view('user.index', ['readings' => $readings]);
        
        $latestReading = DB::table('readings')->orderBy('updated_at', 'desc')->first();
        return view('user.index', ['latestReading' => $latestReading]);
    }
}
