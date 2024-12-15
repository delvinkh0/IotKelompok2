<?php

namespace App\Http\Controllers;

use App\Models\Reading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\SkinTypeResult;

class UserController extends Controller
{
    // Helper function to get skin type info
    private function getSkinTypeInfo($userId)
    {
        $latestSkinType = DB::table('skin_type_result')
            ->where('user_id', $userId)
            ->orderBy('updated_at', 'desc')
            ->first();

        if (is_null($latestSkinType)) {
            $latestSkinType = (object) [
                'id' => null,
                'skin_type' => 0,
                'user_id' => $userId,
                'created_at' => null,
                'updated_at' => null,
            ];
        }

        $skinTypeUser = $latestSkinType->skin_type;
        $skinTypeScore = $latestSkinType->test_result;

        $skinTypeText = match (true) {
            $skinTypeUser == 1 => "Kulit Putih Pucat",
            $skinTypeUser == 2 => "Kulit Putih",
            $skinTypeUser == 3 => "Kulit Cokelat Muda",
            $skinTypeUser == 4 => "Kulit Cokelat Sedang",
            $skinTypeUser == 5 => "Kulit Cokelat Gelap",
            $skinTypeUser == 6 => "Kulit Sangat Gelap Hingga Hitam Pekat",
            default => "Tipe Kulit ___",
        };

        $skinTypeTitle =  match (true) {
            $skinTypeUser == 1 => "Tipe Kulit I",
            $skinTypeUser == 2 => "Tipe Kulit II",
            $skinTypeUser == 3 => "Tipe Kulit III",
            $skinTypeUser == 4 => "Tipe Kulit IV",
            $skinTypeUser == 5 => "Tipe Kulit V",
            $skinTypeUser == 6 => "Tipe Kulit VI",
            default => "Tipe Kulit ___",
        };

        $skinTypeDescription =  match (true) {
            $skinTypeUser == 1 => "Kulit tipe ini selalu terbakar, tidak pernah menggelap, sangat sensitif terhadap UV.",
            $skinTypeUser == 2 => "Kulit tipe ini mudah terbakar, sedikit menggelap, sensitif terhadap UV.",
            $skinTypeUser == 3 => "Kulit tipe ini terkadang terbakar, sedikit sensitif terhadap UV.",
            $skinTypeUser == 4 => "Kulit tipe ini jarang terbakar, minim sensitif terhadap UV.",
            $skinTypeUser == 5 => "Kulit tipe ini jarang terbakar, tidak sensitif terhadap UV.",
            $skinTypeUser == 6 => "Kulit tipe ini tidak terbakar, sangat gelap, tidak sensitif terhadap UV.",
            default => "Tipe kulit belum diketahui, ambil tes Fitzpatrick untuk mengetahui tipe kulit Anda.",
        };

        return [
            'latestSkinType' => $latestSkinType,
            'skinTypeUser' => $skinTypeUser,
            'skinTypeTitle' => $skinTypeTitle,
            'skinTypeDescription' => $skinTypeDescription,
            'skinTypeScore' => $skinTypeScore,
            'skinTypeText' => $skinTypeText,
        ];
    }

    // Auth
    public function index()
    {
        $latestReading = Reading::orderBy('updated_at', 'desc')->first();

        $readings = Reading::all();

        $chartData = $readings->map(function ($reading) {
            $uvIndex = match (true) {
                $reading->sensor_reading < 50 => 0,
                $reading->sensor_reading <= 227 => 1,
                $reading->sensor_reading <= 318 => 2,
                $reading->sensor_reading <= 408 => 3,
                $reading->sensor_reading <= 503 => 4,
                $reading->sensor_reading <= 606 => 5,
                $reading->sensor_reading <= 696 => 6,
                $reading->sensor_reading <= 795 => 7,
                $reading->sensor_reading <= 881 => 8,
                $reading->sensor_reading <= 976 => 9,
                $reading->sensor_reading <= 1079 => 10,
                default => 11,
            };

            return [
                'uvIndex' => $uvIndex,
                'updated_at' => $reading->updated_at->format('Y-m-d H:i:s'),
            ];
        });

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
            0, 1, 2 => "Risiko minimal:",
            3, 4, 5 => "Risiko sedang:",
            6, 7 => "Risiko tinggi:",
            8, 9, 10 => "Risiko sangat tinggi:",
            11 => "Risiko ekstrem:",
        };

        $description = match ($uvIndex) {
            0, 1, 2 => "Aman untuk sebagian besar jenis kulit. Nikmati aktivitas luar ruangan dengan aman; kacamata hitam opsional.",
            3, 4, 5 => "Beberapa jenis kulit mungkin terbakar. Gunakan tabir surya dan kacamata hitam jika berada di luar dalam waktu lama.",
            6, 7 => "Kemungkinan terbakar dengan paparan yang lama. Gunakan SPF 30+, kenakan topi, dan cari tempat teduh saat siang.",
            8, 9, 10 => "Kulit mudah terbakar. Gunakan SPF 50+, batasi paparan matahari antara pukul 10 pagi - 4 sore.",
            11 => "Kerusakan kulit bisa terjadi dalam hitungan menit. Hindari paparan langsung matahari; gunakan perlindungan penuh, termasuk SPF 50+.",
        };

        $userId = Auth::id();

        $skinTypeInfo = $this->getSkinTypeInfo($userId);

        return view('user.index', array_merge([
            'latestReading' => $latestReading,
            'chartData' => $chartData,
            'uvIndex' => $uvIndex,
            'title' => $title,
            'description' => $description,
        ], $skinTypeInfo));
    }

    public function profileIndex()
    {
        $userId = Auth::id();

        $skinTypeInfo = $this->getSkinTypeInfo($userId);

        return view('user.profile', $skinTypeInfo);
    }

    public function jenis_kulit()
    {
        $userId = Auth::id();

        $skinTypeInfo = $this->getSkinTypeInfo($userId);

        return view('user.jenis_kulit', $skinTypeInfo);
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

    public function submit_fitzpatrick_test(Request $request)
    {
        try {
            $data = $request->validate([
                'question1' => 'required|integer|between:0,4',
                'question2' => 'required|integer|between:0,4',
                'question3' => 'required|integer|between:0,4',
                'question4' => 'required|integer|between:0,4',
                'question5' => 'required|integer|between:0,4',
                'question6' => 'required|integer|between:0,4',
                'question7' => 'required|integer|between:0,4',
                'question8' => 'required|integer|between:0,4',
                'question9' => 'required|integer|between:0,4',
                'question10' => 'required|integer|between:0,4',
            ]);

            $totalScore = array_sum($data);

            $skin_type = match (true) {
                $totalScore <= 6 => 1,
                $totalScore <= 13 => 2,
                $totalScore <= 20 => 3,
                $totalScore <= 27 => 4,
                $totalScore <= 34 => 5,
                $totalScore >= 35 => 6
            };

            $resultData = [
                'skin_type' => $skin_type,
                'test_result' => $totalScore,
                'user_id' => Auth::id(),
            ];


            SkinTypeResult::create($resultData);

            return redirect()->route('user.index')->with('success', 'Fitzpatrick test results have been successfully saved! Your skin type is ' . $skin_type . '.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while submitting the test: ' . $e->getMessage())->withInput();
        }
    }

    public function resetTimer(Request $request)
    {
        session(['timer_reset_at' => now()]);
        return response()->json(['message' => 'Timer reset successfully.']);
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

            $userId = Auth::id();

            $latestSkinType = DB::table('skin_type_result')
                ->where('user_id', $userId)
                ->orderBy('updated_at', 'desc')
                ->first();

            if ($latestSkinType) {
                return redirect()->route('user.index');
            } else {
                return redirect()->route('fitzpatrick_test.fitzpatrick1');
            }
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

    public function update_user_info(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(), // Keep current user's email valid
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update user without changing the image
        $user->name = $request->name;
        $user->email = $request->email;

        // dd($request->all());
        $user->save();

        // Redirect back with success message
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        // $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
