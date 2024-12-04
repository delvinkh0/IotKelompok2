<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReadingController extends Controller
{
    public function index()
    {
        $readings = DB::table('readings')->get(); // Mengambil semua data dari tabel 'readings'
        return view('readings.index', ['readings' => $readings]);
    }
}
