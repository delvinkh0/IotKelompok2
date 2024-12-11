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
        .option-button, .option-label {
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
        .option-button:hover,
        .option-label:hover {
            background-color: #E6F0F6;
        }
        .option-button.selected,
        .option-label.selected {
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

        <form action="{{ route('fitzpatrick_test.submit')}}" method="POST">
            @csrf
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <p class="alert alert-success">
                        {{ session('success') }}
                    </p>
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-error bg-red-500 text-white p-4 rounded-md mb-4">
                    {{ session('error') }}
                </div>
            @endif
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">   
            <div class="section-title text-lg md:text-2xl">
                Genetik (ciri fisik)
            </div>

            <div class="question-container">
                <div class="question-title">1. Apa warna matamu?</div>
                <div class="options-container">
                    <input type="radio" id="question1-option1" name="question1" class="hidden" value="0">
                    <label for="question1-option1" class="option-label" onclick="selectOption(this, 'question1')">Biru muda atau hijau, abu-abu</label>

                    <input type="radio" id="question1-option2" name="question1" class="hidden" value="1">
                    <label for="question1-option2" class="option-label" onclick="selectOption(this, 'question1')">Biru, hijau, abu-abu</label>

                    <input type="radio" id="question1-option3" name="question1" class="hidden" value="2">
                    <label for="question1-option3" class="option-label" onclick="selectOption(this, 'question1')">Biru tua atau hijau, coklat muda (hazel)</label>

                    <input type="radio" id="question1-option4" name="question1" class="hidden" value="3">
                    <label for="question1-option4" class="option-label" onclick="selectOption(this, 'question1')">Coklat tua</label>

                    <input type="radio" id="question1-option5" name="question1" class="hidden" value="4">
                    <label for="question1-option5" class="option-label" onclick="selectOption(this, 'question1')">Coklat kehitaman</label>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">2. Apa warna rambutmu (secara alami dan sebelum menua)?</div>
                <div class="options-container">
                    <input type="radio" id="question2-option1" name="question2" class="hidden" value="0">
                    <label for="question2-option1" class="option-label" onclick="selectOption(this, 'question2')">Merah</label>
                    <input type="radio" id="question2-option2" name="question2" class="hidden" value="1">
                    <label for="question2-option2" class="option-label" onclick="selectOption(this, 'question2')">Pirang</label>
                    <input type="radio" id="question2-option3" name="question2" class="hidden" value="2">
                    <label for="question2-option3" class="option-label" onclick="selectOption(this, 'question2')">Coklat kemerahan atau pirang gelap</label>
                    <input type="radio" id="question2-option4" name="question2" class="hidden" value="3">
                    <label for="question2-option4" class="option-label" onclick="selectOption(this, 'question2')">Coklat tua</label>
                    <input type="radio" id="question2-option5" name="question2" class="hidden" value="4">
                    <label for="question2-option5" class="option-label" onclick="selectOption(this, 'question2')">Hitam</label>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">3. Apa warna kulitmu (bagian yang tidak terkena matahari)?</div>
                <div class="options-container">
                    <input type="radio" id="question3-option1" name="question3" class="hidden" value="0">
                    <label for="question3-option1" class="option-label" onclick="selectOption(this, 'question3')">Merah muda</label>
                    <input type="radio" id="question3-option2" name="question3" class="hidden" value="1">
                    <label for="question3-option2" class="option-label" onclick="selectOption(this, 'question3')">Sangat pucat</label>
                    <input type="radio" id="question3-option3" name="question3" class="hidden" value="2">
                    <label for="question3-option3" class="option-label" onclick="selectOption(this, 'question3')">Coklat muda atau zaitun</label>
                    <input type="radio" id="question3-option4" name="question3" class="hidden" value="3">
                    <label for="question3-option4" class="option-label" onclick="selectOption(this, 'question3')">Coklat</label>
                    <input type="radio" id="question3-option5" name="question3" class="hidden" value="4">
                    <label for="question3-option5" class="option-label" onclick="selectOption(this, 'question3')">Coklat tua</label>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">4. Apakah kamu memiliki bintik-bintik di area yang tidak terkena matahari?</div>
                <div class="options-container">
                    <input type="radio" id="question4-option1" name="question4" class="hidden" value="0">
                    <label for="question4-option1" class="option-label" onclick="selectOption(this, 'question4')">Banyak</label>
                    <input type="radio" id="question4-option2" name="question4" class="hidden" value="1">
                    <label for="question4-option2" class="option-label" onclick="selectOption(this, 'question4')">Beberapa</label>
                    <input type="radio" id="question4-option3" name="question4" class="hidden" value="2">
                    <label for="question4-option3" class="option-label" onclick="selectOption(this, 'question4')">Sedikit</label>
                    <input type="radio" id="question4-option4" name="question4" class="hidden" value="3">
                    <label for="question4-option4" class="option-label" onclick="selectOption(this, 'question4')">Jarang</label>
                    <input type="radio" id="question4-option5" name="question4" class="hidden" value="4">
                    <label for="question4-option5" class="option-label" onclick="selectOption(this, 'question4')">Tidak ada</label>
                </div>
            </div>

            <div class="section-title text-lg md:text-2xl">Sensitivitas (reaksi terhadap paparan sinar matahari)</div>

            <div class="question-container">
                <div class="question-title">1. Apa yang terjadi pada kulitmu jika kamu terkena sinar matahari dalam waktu lama?</div>
                <div class="options-container">
                    <input type="radio" id="question5-option1" name="question5" class="hidden" value="0">
                    <label for="question5-option1" class="option-label" onclick="selectOption(this, 'question5')">Luka bakar parah, melepuh, mengelupas</label>
                    <input type="radio" id="question5-option2" name="question5" class="hidden" value="1">
                    <label for="question5-option2" class="option-label" onclick="selectOption(this, 'question5')">Luka bakar sedang, melepuh, mengelupas</label>
                    <input type="radio" id="question5-option3" name="question5" class="hidden" value="2">
                    <label for="question5-option3" class="option-label" onclick="selectOption(this, 'question5')">Luka bakar diikuti pengelupasan kulit</label>
                    <input type="radio" id="question5-option4" name="question5" class="hidden" value="3">
                    <label for="question5-option4" class="option-label" onclick="selectOption(this, 'question5')">Sedikit terkena luka bakar</label>
                    <input type="radio" id="question5-option5" name="question5" class="hidden" value="4">
                    <label for="question5-option5" class="option-label" onclick="selectOption(this, 'question5')">Tidak terkena luka bakar</label>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">2. Apakah kulitmu menjadi coklat setelah terkena sinar matahari?</div>
                <div class="options-container">
                    <input type="radio" id="question6-option1" name="question6" class="hidden" value="0">
                    <label for="question6-option1" class="option-label" onclick="selectOption(this, 'question6')">Tidak pernah</label>
                    <input type="radio" id="question6-option2" name="question6" class="hidden" value="1">
                    <label for="question6-option2" class="option-label" onclick="selectOption(this, 'question6')">Jarang</label>
                    <input type="radio" id="question6-option3" name="question6" class="hidden" value="2">
                    <label for="question6-option3" class="option-label" onclick="selectOption(this, 'question6')">Kadang-kadang</label>
                    <input type="radio" id="question6-option4" name="question6" class="hidden" value="3">
                    <label for="question6-option4" class="option-label" onclick="selectOption(this, 'question6')">Sering</label>
                    <input type="radio" id="question6-option5" name="question6" class="hidden" value="4">
                    <label for="question6-option5" class="option-label" onclick="selectOption(this, 'question6')">Selalu</label>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">3. Seberapa coklat kulitmu setelah berjemur?</div>
                <div class="options-container">
                    <input type="radio" id="question7-option1" name="question7" class="hidden" value="0">
                    <label for="question7-option1" class="option-label" onclick="selectOption(this, 'question7')">Hampir tidak coklat atau tidak coklat sama sekali</label>
                    <input type="radio" id="question7-option2" name="question7" class="hidden" value="1">
                    <label for="question7-option2" class="option-label" onclick="selectOption(this, 'question7')">Coklat muda</label>
                    <input type="radio" id="question7-option3" name="question7" class="hidden" value="2">
                    <label for="question7-option3" class="option-label" onclick="selectOption(this, 'question7')">Coklat sedang</label>
                    <input type="radio" id="question7-option4" name="question7" class="hidden" value="3">
                    <label for="question7-option4" class="option-label" onclick="selectOption(this, 'question7')">Coklat tua</label>
                    <input type="radio" id="question7-option5" name="question7" class="hidden" value="4">
                    <label for="question7-option5" class="option-label" onclick="selectOption(this, 'question7')">Sangat coklat</label>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">4. Apakah wajahmu sensitif terhadap sinar matahari?</div>
                <div class="options-container">
                    <input type="radio" id="question8-option1" name="question8" class="hidden" value="0">
                    <label for="question8-option1" class="option-label" onclick="selectOption(this, 'question8')">Sangat sensitif</label>
                    <input type="radio" id="question8-option2" name="question8" class="hidden" value="1">
                    <label for="question8-option2" class="option-label" onclick="selectOption(this, 'question8')">Sensitif</label>
                    <input type="radio" id="question8-option3" name="question8" class="hidden" value="2">
                    <label for="question8-option3" class="option-label" onclick="selectOption(this, 'question8')">Sedikit sensitif</label>
                    <input type="radio" id="question8-option4" name="question8" class="hidden" value="3">
                    <label for="question8-option4" class="option-label" onclick="selectOption(this, 'question8')">Tahan</label>
                    <input type="radio" id="question8-option5" name="question8" class="hidden" value="4">
                    <label for="question8-option5" class="option-label" onclick="selectOption(this, 'question8')">Sangat tahan</label>
                </div>
            </div>

            <div class="section-title text-lg md:text-2xl">Paparan sengaja (kebiasaan berjemur)</div>

            <div class="question-container">
                <div class="question-title">1. Seberapa sering kamu berjemur?</div>
                <div class="options-container">
                    <input type="radio" id="question9-option1" name="question9" class="hidden" value="0">
                    <label for="question9-option1" class="option-label" onclick="selectOption(this, 'question9')">Tidak pernah</label>
                    <input type="radio" id="question9-option2" name="question9" class="hidden" value="1">
                    <label for="question9-option2" class="option-label" onclick="selectOption(this, 'question9')">Jarang</label>
                    <input type="radio" id="question9-option3" name="question9" class="hidden" value="2">
                    <label for="question9-option3" class="option-label" onclick="selectOption(this, 'question9')">Kadang-kadang</label>
                    <input type="radio" id="question9-option4" name="question9" class="hidden" value="3">
                    <label for="question9-option4" class="option-label" onclick="selectOption(this, 'question9')">Sering</label>
                    <input type="radio" id="question9-option5" name="question9" class="hidden" value="4">
                    <label for="question9-option5" class="option-label" onclick="selectOption(this, 'question9')">Selalu</label>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">2. Kapan terakhir kali kamu terpapar sinar matahari atau sumber tanning buatan (tempat tidur tanning)?</div>
                <div class="options-container">
                    <input type="radio" id="question10-option1" name="question10" class="hidden" value="0">
                    <label for="question10-option1" class="option-label" onclick="selectOption(this, 'question10')">Lebih dari 3 bulan yang lalu</label>
                    <input type="radio" id="question10-option2" name="question10" class="hidden" value="1">
                    <label for="question10-option2" class="option-label" onclick="selectOption(this, 'question10')">Dalam 2-3 bulan terakhir</label>
                    <input type="radio" id="question10-option3" name="question10" class="hidden" value="2">
                    <label for="question10-option3" class="option-label" onclick="selectOption(this, 'question10')">Dalam 1-2 bulan terakhir</label>
                    <input type="radio" id="question10-option4" name="question10" class="hidden" value="3">
                    <label for="question10-option4" class="option-label" onclick="selectOption(this, 'question10')">Dalam seminggu terakhir</label>
                    <input type="radio" id="question10-option5" name="question10" class="hidden" value="4">
                    <label for="question10-option5" class="option-label" onclick="selectOption(this, 'question10')">Dalam sehari terakhir</label>
                </div>
            </div>

            <button class="submit-button" type="submit">Kirim</button>
        </form>
    </div>

    <script>
        function selectOption(button, question) {
            // Remove the 'selected' class from all buttons
            document.querySelectorAll(`[onclick="selectOption(this, '${question}')"]`).forEach(btn => {
                btn.classList.remove('selected');
            });

            // Add the 'selected' class to the clicked button
            button.classList.add('selected');

            // Get the associated radio input for this button
            const value = button.getAttribute('value'); // Assuming data-value stores the radio button's value
            const radioInput = document.querySelector(`input[name='${question}'][value='${value}']`);

            // Ensure the corresponding radio input is checked
            if (radioInput) {
                radioInput.checked = true;
            }
        }

    </script>
</body>
</html>
