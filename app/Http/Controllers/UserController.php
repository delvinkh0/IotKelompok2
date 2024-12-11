<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

        $sensorValue = $latestReading->sensor_reading;

        // Map sensor readings to UV Index
        $uvIndex = match (true) {
            $sensorValue < 50 => 0,
            $sensorValue <= 227 => 1,
            $sensorValue <= 318 => 2,
            $sensorValue <= 408 => 3,
            $sensorValue <= 503 => 4,
            $sensorValue <= 606 => 5,
            $sensorValue <= 696 => 6,
            $sensorValue <= 795 => 7,
            $sensorValue <= 881 => 8,
            $sensorValue <= 976 => 9,
            $sensorValue <= 1079 => 10,
            default => 11,
        };

        $title = match ($uvIndex) {
            0, 1, 2 => "Minimal risk:",
            3, 4, 5 => "Moderate risk:",
            6, 7 => "High risk:",
            8, 9, 10 => "Very high risk:",
            11 => "Extreme risk:",
        };

        $description = match ($uvIndex) {
            0, 1, 2 => "Safe for most skin types. Enjoy the outdoors safely; sunglasses optional.",
            3, 4, 5 => "Some skin types may burn. Wear sunscreen and sunglasses if outdoors for long.",
            6, 7 => "Likely to burn with extended exposure. Apply SPF 30+, wear a hat, and find shade midday.",
            8, 9, 10 => "Skin burns quickly. Use SPF 50+, limit sun exposure 10 AM - 4 PM.",
            11 => "Skin damage can happen in minutes. Avoid direct sun; wear full protection, including SPF 50+.",
        };

        return view('user.index', compact('latestReading', 'uvIndex', 'title', 'description'));
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

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('user.index'); // Mengarahkan ke rute 'user.index'
        }

        return back()->withErrors([
            'password' => 'Wrong email or password',
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('auth.login')->with('success', 'Registration success. Please login!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
