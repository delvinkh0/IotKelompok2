<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitzpatrick Skin Test</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">

    @vite('public/css/app.css')

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-image: url('asset/awan.png');
            background-size: auto;
            background-repeat: no-repeat;
            background-position: center;
        }
        .option-button {
            width: 224px;
            height: 64px;
            padding: 0;
            border-radius: 20px;
            border: 1px solid #659CBF;
            background-color: #FDFDFC;
            color: #1E1F24;
            font-size: 16px;
            line-height: 18px;
            text-align: center;
            font-weight: normal;
            opacity: 1;
            transition: background-color 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .option-button:hover {
            background-color: #E6F0F6;
        }
        .option-button.selected {
            background-color: #659CBF;
            color: white;
        }
        .question-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
            padding: 20px;
            border-radius: 10px;
        }
        .question-title {
            font-size: 18px;
            font-weight: 600;
            color: #37739A;
            text-align: left;
            margin-bottom: 16px;
        }
        .options-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .section-title {
            color: #37739A;
            font-size: 24px;
            font-weight: 600;
            margin-top: 10px;
        }
        .submit-button {
            width: 100%;
            height: 64px;
            border-radius: 20px;
            border: none;
            background-color: #659CBF;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 50px;
            margin-top: 20px;
        }
        .submit-button:hover {
            background-color: #4A8BAF;
        }
    </style>
</head>
<body class="bg-gray-5 flex items-center justify-center min-h-screen fitzpatrick_test">
    <div class="flex flex-col gap-10 px-5 text-left w-full max-w-8xl md:mt-48">
        <div class="text-[#203C4D] text-3xl md:text-5xl font-semibold capitalize leading-[50px] text-center mb-10">
            Fitzpatrick Skin Phototype
        </div>

        <div class="text-black text-lg md:text-2xl font-normal leading-[25px] text-center mb-10">
            Kalkulator jenis kulit Fitzpatrick menggunakan skala Fitzpatrick untuk mengklasifikasikan kulit berdasarkan respons terhadap sinar matahari. Dengan mengikuti "Kuis Jenis Kulit Fitzpatrick" ini, Anda bisa lebih memahami kebutuhan kulit Anda, melindunginya, dan menemukan shade foundation yang tepat.
        </div>

        <div class="text-black text-lg md:text-2xl font-normal leading-[25px] text-center mb-10">
            Siap mengetahui jenis kulit Anda? Ikuti kuis ini!
        </div>

        <form action="">
            <div class="section-title text-lg md:text-2xl">
                Genetik (ciri fisik)
            </div>

            <div class="question-container">
                <div class="question-title">1. Apa warna matamu?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question1')">Biru muda atau hijau, abu-abu</button>
                    <button class="option-button" onclick="selectOption(this, 'question1')">Biru, hijau, abu-abu</button>
                    <button class="option-button" onclick="selectOption(this, 'question1')">Biru tua atau hijau, coklat muda (hazel)</button>
                    <button class="option-button" onclick="selectOption(this, 'question1')">Coklat tua</button>
                    <button class="option-button" onclick="selectOption(this, 'question1')">Coklat kehitaman</button>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">2. Apa warna rambutmu (secara alami dan sebelum menua)?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question2')">Merah</button>
                    <button class="option-button" onclick="selectOption(this, 'question2')">Pirang</button>
                    <button class="option-button" onclick="selectOption(this, 'question2')">Coklat kemerahan atau pirang gelap</button>
                    <button class="option-button" onclick="selectOption(this, 'question2')">Coklat tua</button>
                    <button class="option-button" onclick="selectOption(this, 'question2')">Hitam</button>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">3. Apa warna kulitmu (bagian yang tidak terkena matahari)?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question3')">Merah muda</button>
                    <button class="option-button" onclick="selectOption(this, 'question3')">Sangat pucat</button>
                    <button class="option-button" onclick="selectOption(this, 'question3')">Coklat muda atau zaitun</button>
                    <button class="option-button" onclick="selectOption(this, 'question3')">Coklat</button>
                    <button class="option-button" onclick="selectOption(this, 'question3')">Coklat tua</button>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">4. Apakah kamu memiliki bintik-bintik di area yang tidak terkena matahari?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question4')">Banyak</button>
                    <button class="option-button" onclick="selectOption(this, 'question4')">Beberapa</button>
                    <button class="option-button" onclick="selectOption(this, 'question4')">Sedikit</button>
                    <button class="option-button" onclick="selectOption(this, 'question4')">Jarang</button>
                    <button class="option-button" onclick="selectOption(this, 'question4')"> Tidak ada</button>
                </div>
            </div>

            <div class="section-title text-lg md:text-2xl">Sensitivitas (reaksi terhadap paparan sinar matahari)</div>

            <div class="question-container">
                <div class="question-title">1. Apa yang terjadi pada kulitmu jika kamu terkena sinar matahari dalam waktu lama?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question5')">Luka bakar parah, melepuh, mengelupas</button>
                    <button class="option-button" onclick="selectOption(this, 'question5')">Luka bakar sedang, melepuh, mengelupas</button>
                    <button class="option-button" onclick="selectOption(this, 'question5')">Luka bakar diikuti pengelupasan kulit</button>
                    <button class="option-button" onclick="selectOption(this, 'question5')">Luka bakar parah, melepuh, mengelupas</button>
                    <button class="option-button" onclick="selectOption(this, 'question5')">Jarang terbakar</button>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">2. Apakah kulitmu menjadi coklat setelah terkena sinar matahari?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question6')">Tidak pernah</button>
                    <button class="option-button" onclick="selectOption(this, 'question6')">Jarang</button>
                    <button class="option-button" onclick="selectOption(this, 'question6')">Kadang-kadang</button>
                    <button class="option-button" onclick="selectOption(this, 'question6')">Sering</button>
                    <button class="option-button" onclick="selectOption(this, 'question6')">Selalu</button>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">3. Seberapa coklat kulitmu setelah berjemur?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question7')">Hampir tidak coklat atau tidak coklat sama sekali</button>
                    <button class="option-button" onclick="selectOption(this, 'question7')">Coklat muda</button>
                    <button class="option-button" onclick="selectOption(this, 'question7')">Coklat sedang</button>
                    <button class="option-button" onclick="selectOption(this, 'question7')">Coklat tua</button>
                    <button class="option-button" onclick="selectOption(this, 'question7')">Sangat coklat</button>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">4. Apakah wajahmu sensitif terhadap sinar matahari?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question8')">Sangat sensitif</button>
                    <button class="option-button" onclick="selectOption(this, 'question8')">Sensitif</button>
                    <button class="option-button" onclick="selectOption(this, 'question8')">Sedikit sensitif</button>
                    <button class="option-button" onclick="selectOption(this, 'question8')">Tahan</button>
                    <button class="option-button" onclick="selectOption(this, 'question8')">Sangat tahan</button>
                </div>
            </div>

            <div class="section-title text-lg md:text-2xl">Paparan sengaja (kebiasaan berjemur)</div>

            <div class="question-container">
                <div class="question-title">1. Seberapa sering kamu berjemur?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question9')">Tidak pernah</button>
                    <button class="option-button" onclick="selectOption(this, 'question9')">Jarang</button>
                    <button class="option-button" onclick="selectOption(this, 'question9')">Kadang-kadang</button>
                    <button class="option-button" onclick="selectOption(this, 'question9')">Sering</button>
                    <button class="option-button" onclick="selectOption(this, 'question9')">Selalu</button>
                </div>
            </div>

            <div class="question -container">
                <div class="question-title">2. Kapan terakhir kali kamu terpapar sinar matahari atau sumber tanning buatan (tempat tidur tanning)?</div>
                <div class="options-container">
                    <button class="option-button" onclick="selectOption(this, 'question10')">Lebih dari 3 bulan yang lalu</button>
                    <button class="option-button" onclick="selectOption(this, 'question10')">Dalam 2-3 bulan terakhir</button>
                    <button class="option-button" onclick="selectOption(this, 'question10')">Dalam 1-2 bulan terakhir</button>
                    <button class="option-button" onclick="selectOption(this, 'question10')">Dalam seminggu terakhir</button>
                    <button class="option-button" onclick="selectOption(this, 'question10')">Dalam sehari terakhir</button>
                </div>
            </div>

            <button class="submit-button">Kirim</button>
        </form>
    </div>

    <script>
        function selectOption(button, question) {
            document.querySelectorAll(`[onclick="selectOption(this, '${question}')"]`).forEach(btn => {
                btn.classList.remove('selected');
            });
            button.classList.add('selected');
        }
    </script>
</body>
</html>
