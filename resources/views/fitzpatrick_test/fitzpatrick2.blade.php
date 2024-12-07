<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitzpatrick Skin Phototype</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">

    @vite('public/css/app.css')

    <style>
        .button {
            width: 129px;
            height: 55px;
            padding: 17px 30px;
            border-radius: 4px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            border: 1px solid #2D546E;
        }
        .button.tes {
            background-color: #2D546E;
            color: white;
        }
        .text-background {
            background-image: url('./assets/Awan/awan5.png');
            background-position: center;
            background-repeat: no-repeat;
            padding: 10px;
            border-radius: 8px;
            color: rgb(0, 0, 0);
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-white">
    <div class="flex flex-col items-center p-8">
        <div class="flex flex-col gap-10 px-5 text-left w-full max-w-8xl md:mt-16">
            <div class="text-background text-2xl md:text-4xl font-semibold capitalize leading-[50px] text-center ">
                Fitzpatrick Skin Phototype
            </div>
        </div>

        <div class="flex items-center justify-center">
            <img src="{{ asset('assets/img/Fitzpatrick/fitz2.png') }}" alt="Fitzpatrick Skin Phototype Illustration" class="h-auto w-full max-w-[637px] object-cover">
        </div>

        <div class="h-[109px] text-center text-black text-[25px] font-normal leading-9 mt-4">
            Fitzpatrick skin phototype adalah sistem yang umum digunakan untuk menggambarkan jenis kulit seseorang dalam hal respons terhadap paparan radiasi ultraviolet (UVR).
        </div>


        <div class="flex gap-4 mt-6">
            <a href="{{ route('fitzpatrick_test.fitzpatrick1') }}" class="button">Kembali</a>
            <a href="{{ route('fitzpatrick_test.fitzpatrick3') }}" class="button tes">Lanjut</a>
        </div>
    </div>
</body>
</html>
