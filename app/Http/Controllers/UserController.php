<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Auth
    public function index()
    {
        $latestReading = DB::table('readings')->orderBy('updated_at', 'desc')->first();

        if (is_null($latestReading)) {
            $latestReading = (object) [
                'id' => null,
                'sensor_reading' => 0,
                'sensor_voltage' => 0,
                'temperature' => 0,
                'pressure' => 0,
                'humidity' => 0,
                'gas' => 0,
                'altitude' => 0,
                'created_at' => null,
                'updated_at' => null,
            ];
        }

        return view('user.index', ['latestReading' => $latestReading]);
    }

    public function profileIndex()
    {
        return view('user.profile');
    }

    public function jenis_kulit()
    {
        return view('user.jenis_kulit');
    }

    // Fitzpatrick_Test
    public function fitzpatrick_test_intro1()
    {
        return view('fitzpatrick_test.fitzpatrick1');
    }

    public function fitzpatrick_test_intro2()
    {
        return view('fitzpatrick_test.fitzpatrick2');
    }

    public function fitzpatrick_test()
    {
        return view('fitzpatrick_test.fitzpatrick3');
    }

    // No Need Auth
    public function homepage()
    {
        return view('guest.index');
    }

    // Authentication
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
