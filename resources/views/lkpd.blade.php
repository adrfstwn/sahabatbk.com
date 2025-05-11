@extends('layouts.app')
@section('title', 'LKPD - SahabatBK.com')
@section('content')

@push('styles')
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FEEFAD;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 25px rgba(3, 174, 210, 0.15);
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .floating-delayed {
            animation: float 6s ease-in-out 2s infinite;
        }

        .floating-more-delayed {
            animation: float 6s ease-in-out 4s infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(5deg);
            }

            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="date"],
        textarea,
        select {
            transition: all 0.3s ease;
            border: 2px solid #e2e8f0;
            font-size: 0.875rem;
            padding: 6px 12px;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus,
        textarea:focus,
        select:focus {
            border-color: #68D2E8;
            box-shadow: 0 0 0 3px rgba(104, 210, 232, 0.25);
            outline: none;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-checkbox {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkmark {
            height: 20px;
            width: 20px;
            background-color: white;
            border: 2px solid #68D2E8;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .custom-checkbox input:checked~.checkmark {
            background-color: #03AED2;
            border-color: #03AED2;
        }

        .checkmark:after {
            content: "";
            display: none;
            width: 6px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .custom-checkbox input:checked~.checkmark:after {
            display: block;
        }

        .custom-radio {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .custom-radio input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radio-mark {
            height: 20px;
            width: 20px;
            background-color: white;
            border: 2px solid #68D2E8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .custom-radio input:checked~.radio-mark {
            border-color: #03AED2;
        }

        .radio-mark:after {
            content: "";
            display: none;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #03AED2;
        }

        .custom-radio input:checked~.radio-mark:after {
            display: block;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 22px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #e2e8f0;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #03AED2;
        }

        input:checked+.slider:before {
            transform: translateX(18px);
        }

        .custom-range {
            -webkit-appearance: none;
            width: 100%;
            height: 6px;
            border-radius: 5px;
            background: #e2e8f0;
            outline: none;
        }

        .custom-range::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #03AED2;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .custom-range::-webkit-slider-thumb:hover {
            background: #68D2E8;
            transform: scale(1.1);
        }

        .custom-range::-moz-range-thumb {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #03AED2;
            cursor: pointer;
            border: none;
            transition: all 0.2s ease;
        }

        .custom-range::-moz-range-thumb:hover {
            background: #68D2E8;
            transform: scale(1.1);
        }

        .custom-select {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .custom-select select {
            display: none;
        }

        .select-selected {
            background-color: white;
            border: 2px solid #e2e8f0;
            border-radius: 6px;
            padding: 8px 12px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .select-selected:after {
            content: "";
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #03AED2;
            transition: all 0.3s;
        }

        .select-selected.select-arrow-active:after {
            transform: rotate(180deg);
        }

        .select-items {
            position: absolute;
            background-color: white;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
            border: 2px solid #68D2E8;
            border-top: none;
            border-radius: 0 0 6px 6px;
            max-height: 180px;
            overflow-y: auto;
            display: none;
        }

        .select-items div {
            color: #333;
            padding: 8px 12px;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.875rem;
        }

        .select-items div:hover {
            background-color: rgba(104, 210, 232, 0.1);
        }

        .select-hide {
            display: none;
        }

        .same-as-selected {
            background-color: rgba(104, 210, 232, 0.2);
        }

        /* Pengurangan ukuran untuk layar desktop */
        @media (min-width: 1024px) {
            .container {
                max-width: 1200px;
            }

            .card-container {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 16px;
            }

            .card-sm {
                grid-column: span 1;
            }

            .card-md {
                grid-column: span 2;
            }

            .card-lg {
                grid-column: span 4;
            }

            .card-content {
                padding: 1rem;
            }

            .card-header {
                padding: 0.75rem 1rem;
            }

            .card-header h3 {
                font-size: 1.1rem;
            }

            /* Ukuran font dan spacing yang lebih kecil */
            .card label,
            .card p {
                font-size: 0.875rem;
            }

            .card .mb-4 {
                margin-bottom: 0.75rem;
            }

            .card .mb-5 {
                margin-bottom: 1rem;
            }

            .card .space-y-2 {
                margin-top: 0.5rem;
            }

            textarea {
                min-height: 60px;
            }
        }
    </style>
@endpush

<section class="container mx-auto px-4 py-8 pt-40">
    <div class="mb-8 text-center relative">
        <img src="https://readdy.ai/api/search-image?query=cute%20cartoon%20pencil%20character%20with%20happy%20face%2C%20school%20supplies%20floating%20around%2C%20colorful%20educational%20theme%2C%20vibrant%20colors%2C%20playful%20design%2C%20suitable%20for%20children%2C%20digital%20art%20style%2C%20clean%20background&width=150&height=150&seq=1&orientation=squarish"
            alt="Karakter Pensil" class="w-20 h-20 mx-auto mb-4 floating">

        <h2 class="text-3xl font-bold text-primary mb-2">Lembar Kerja Peserta Didik</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Selamat datang di LKPD interaktif! Silakan isi form-form berikut
            dengan teliti dan sesuai petunjuk. Selamat belajar!</p>

        <div class="absolute -top-10 right-10 opacity-50 floating-delayed">
            <div class="w-12 h-12 flex items-center justify-center text-accent">
                <i class="ri-book-open-line ri-2x"></i>
            </div>
        </div>
        <div class="absolute top-20 left-10 opacity-50 floating-more-delayed">
            <div class="w-10 h-10 flex items-center justify-center text-secondary">
                <i class="ri-pencil-ruler-2-line ri-2x"></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1: Data Diri -->
        <div class="card bg-white rounded-md shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-primary to-secondary p-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-user-3-line"></i>
                    </div>
                    Data Diri
                </h3>
            </div>
            <div class="p-6">
                <form>
                    <div class="mb-4">
                        <label for="nama" class="block text-primary font-medium mb-2">Nama Lengkap</label>
                        <input type="text" id="nama"
                            class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                            placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="mb-4">
                        <label for="kelas" class="block text-primary font-medium mb-2">Kelas</label>
                        <div class="custom-select">
                            <select id="kelas"
                                class="w-full px-4 py-2 rounded appearance-none border-none focus:ring-2 focus:ring-secondary pr-8">
                                <option value="" disabled selected>Pilih kelas</option>
                                <option value="7A">7A</option>
                                <option value="7B">7B</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="9A">9A</option>
                                <option value="9B">9B</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-primary">
                                <div class="w-5 h-5 flex items-center justify-center">
                                    <i class="ri-arrow-down-s-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="tanggal" class="block text-primary font-medium mb-2">Tanggal Pengerjaan</label>
                        <input type="date" id="tanggal"
                            class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary">
                    </div>
                    <div class="mb-4">
                        <label for="nomor_absen" class="block text-primary font-medium mb-2">Nomor Absen</label>
                        <input type="number" id="nomor_absen"
                            class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                            placeholder="Masukkan nomor absen">
                    </div>
                </form>
            </div>
        </div>

        <!-- Card 2: Pertanyaan Pilihan Ganda -->
        <div class="card bg-white rounded-md shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-primary to-secondary p-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-question-answer-line"></i>
                    </div>
                    Pilihan Ganda
                </h3>
            </div>
            <div class="p-6">
                <div class="mb-6">
                    <p class="font-medium mb-3">1. Apa ibu kota Indonesia?</p>
                    <div class="space-y-2">
                        <label class="custom-radio flex items-center">
                            <input type="radio" name="q1" value="a">
                            <span class="radio-mark mr-3"></span>
                            <span>A. Jakarta</span>
                        </label>
                        <label class="custom-radio flex items-center">
                            <input type="radio" name="q1" value="b">
                            <span class="radio-mark mr-3"></span>
                            <span>B. Bandung</span>
                        </label>
                        <label class="custom-radio flex items-center">
                            <input type="radio" name="q1" value="c">
                            <span class="radio-mark mr-3"></span>
                            <span>C. Surabaya</span>
                        </label>
                        <label class="custom-radio flex items-center">
                            <input type="radio" name="q1" value="d">
                            <span class="radio-mark mr-3"></span>
                            <span>D. Nusantara</span>
                        </label>
                    </div>
                </div>

                <div class="mb-6">
                    <p class="font-medium mb-3">2. Siapa penemu teori relativitas?</p>
                    <div class="space-y-2">
                        <label class="custom-radio flex items-center">
                            <input type="radio" name="q2" value="a">
                            <span class="radio-mark mr-3"></span>
                            <span>A. Isaac Newton</span>
                        </label>
                        <label class="custom-radio flex items-center">
                            <input type="radio" name="q2" value="b">
                            <span class="radio-mark mr-3"></span>
                            <span>B. Albert Einstein</span>
                        </label>
                        <label class="custom-radio flex items-center">
                            <input type="radio" name="q2" value="c">
                            <span class="radio-mark mr-3"></span>
                            <span>C. Nikola Tesla</span>
                        </label>
                        <label class="custom-radio flex items-center">
                            <input type="radio" name="q2" value="d">
                            <span class="radio-mark mr-3"></span>
                            <span>D. Galileo Galilei</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3: Pertanyaan Isian -->
        <div class="card bg-white rounded-md shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-primary to-secondary p-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-edit-line"></i>
                    </div>
                    Isian Singkat
                </h3>
            </div>
            <div class="p-6">
                <div class="mb-5">
                    <p class="font-medium mb-3">1. Sebutkan 5 nama planet dalam tata surya!</p>
                    <textarea rows="3" class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                        placeholder="Jawaban Anda..."></textarea>
                </div>

                <div class="mb-5">
                    <p class="font-medium mb-3">2. Jelaskan proses fotosintesis secara singkat!</p>
                    <textarea rows="3" class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                        placeholder="Jawaban Anda..."></textarea>
                </div>
            </div>
        </div>

        <!-- Card 4: Matematika -->
        <div class="card bg-white rounded-md shadow-lg overflow-hidden col-span-1 md:col-span-2">
            <div class="bg-gradient-to-r from-primary to-secondary p-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-calculator-line"></i>
                    </div>
                    Soal Matematika
                </h3>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="font-medium mb-3">1. Hitunglah hasil dari 25 × 4 ÷ 2 + 10</p>
                        <input type="number"
                            class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                            placeholder="Jawaban Anda...">

                        <p class="font-medium mb-3 mt-5">2. Jika panjang sisi sebuah persegi adalah 8 cm, berapakah
                            luasnya?</p>
                        <input type="number"
                            class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                            placeholder="Jawaban Anda...">
                    </div>

                    <div>
                        <p class="font-medium mb-3">3. Tentukan akar dari persamaan x² - 9 = 0</p>
                        <div class="flex space-x-2">
                            <input type="text"
                                class="w-1/2 px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                                placeholder="x₁">
                            <input type="text"
                                class="w-1/2 px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                                placeholder="x₂">
                        </div>

                        <p class="font-medium mb-3 mt-5">4. Jika 3x + 7 = 22, berapakah nilai x?</p>
                        <input type="number"
                            class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                            placeholder="Jawaban Anda...">
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 5: Percobaan Sains -->
        <div class="card bg-white rounded-md shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-primary to-secondary p-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-flask-line"></i>
                    </div>
                    Percobaan Sains
                </h3>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <p class="font-medium mb-2">Alat dan Bahan yang Digunakan:</p>
                    <div class="space-y-2">
                        <label class="custom-checkbox flex items-center">
                            <input type="checkbox" name="alat1">
                            <span class="checkmark mr-3"></span>
                            <span>Gelas kimia</span>
                        </label>
                        <label class="custom-checkbox flex items-center">
                            <input type="checkbox" name="alat2">
                            <span class="checkmark mr-3"></span>
                            <span>Tabung reaksi</span>
                        </label>
                        <label class="custom-checkbox flex items-center">
                            <input type="checkbox" name="alat3">
                            <span class="checkmark mr-3"></span>
                            <span>Pipet tetes</span>
                        </label>
                        <label class="custom-checkbox flex items-center">
                            <input type="checkbox" name="alat4">
                            <span class="checkmark mr-3"></span>
                            <span>Larutan asam</span>
                        </label>
                        <label class="custom-checkbox flex items-center">
                            <input type="checkbox" name="alat5">
                            <span class="checkmark mr-3"></span>
                            <span>Indikator pH</span>
                        </label>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="hasil_percobaan" class="block text-primary font-medium mb-2">Hasil
                        Pengamatan:</label>
                    <textarea id="hasil_percobaan" rows="4"
                        class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                        placeholder="Tuliskan hasil pengamatan Anda..."></textarea>
                </div>
            </div>
        </div>

        <!-- Card 6: Penilaian -->
        <div class="card bg-white rounded-md shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-primary to-secondary p-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-star-line"></i>
                    </div>
                    Penilaian Diri
                </h3>
            </div>
            <div class="p-6">
                <div class="mb-5">
                    <p class="font-medium mb-3">Seberapa paham Anda dengan materi ini?</p>
                    <input type="range" min="1" max="10" value="5" class="custom-range w-full">
                    <div class="flex justify-between text-xs text-gray-500 mt-1">
                        <span>Belum Paham</span>
                        <span>Cukup Paham</span>
                        <span>Sangat Paham</span>
                    </div>
                </div>

                <div class="mb-5">
                    <p class="font-medium mb-3">Apakah Anda menikmati pembelajaran ini?</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Tidak</span>
                        <label class="switch mx-3">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <span class="text-gray-600">Ya</span>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="saran" class="block text-primary font-medium mb-2">Saran untuk pembelajaran
                        selanjutnya:</label>
                    <textarea id="saran" rows="3"
                        class="w-full px-4 py-2 rounded border-none focus:ring-2 focus:ring-secondary"
                        placeholder="Berikan saran Anda..."></textarea>
                </div>
            </div>
        </div>

        <!-- Card 7: Menggambar -->
        <div class="card bg-white rounded-md shadow-lg overflow-hidden col-span-1 lg:col-span-3">
            <div class="bg-gradient-to-r from-primary to-secondary p-4">
                <h3 class="text-xl font-semibold text-white flex items-center">
                    <div class="w-8 h-8 flex items-center justify-center mr-2">
                        <i class="ri-palette-line"></i>
                    </div>
                    Tugas Menggambar
                </h3>
            </div>
            <div class="p-6">
                <p class="text-center mb-4">Gambarlah siklus air pada kotak di bawah ini. Sertakan keterangan pada
                    setiap tahapan.</p>
                <div
                    class="border-2 border-dashed border-secondary rounded-lg h-64 flex items-center justify-center bg-light/50">
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto flex items-center justify-center text-secondary mb-2">
                            <i class="ri-image-add-line ri-2x"></i>
                        </div>
                        <p class="text-gray-500">Klik untuk mengunggah gambar atau mulai menggambar</p>
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button
                        class="bg-accent hover:bg-amber-400 text-gray-800 font-medium py-2 px-4 rounded-button transition-colors duration-300 flex items-center whitespace-nowrap">
                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                            <i class="ri-upload-2-line"></i>
                        </div>
                        Unggah Gambar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10 flex justify-center">
        <button
            class="bg-primary hover:bg-secondary text-white font-bold py-3 px-8 rounded-button shadow-lg transition-all duration-300 flex items-center whitespace-nowrap">
            <div class="w-6 h-6 flex items-center justify-center mr-2">
                <i class="ri-save-line"></i>
            </div>
            Simpan Jawaban
        </button>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Custom Select Implementation
        var customSelects = document.getElementsByClassName("custom-select");
        for (let i = 0; i < customSelects.length; i++) {
            let select = customSelects[i].getElementsByTagName("select")[0];
            let selectedDiv = document.createElement("DIV");
            selectedDiv.setAttribute("class", "select-selected");
            selectedDiv.innerHTML = select.options[select.selectedIndex].innerHTML;
            customSelects[i].appendChild(selectedDiv);

            let itemsDiv = document.createElement("DIV");
            itemsDiv.setAttribute("class", "select-items select-hide");

            for (let j = 1; j < select.length; j++) {
                let optionDiv = document.createElement("DIV");
                optionDiv.innerHTML = select.options[j].innerHTML;
                optionDiv.addEventListener("click", function () {
                    let select = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    let selected = this.parentNode.previousSibling;

                    for (let k = 0; k < select.length; k++) {
                        if (select.options[k].innerHTML === this.innerHTML) {
                            select.selectedIndex = k;
                            selected.innerHTML = this.innerHTML;
                            let sameAsSelected = this.parentNode.getElementsByClassName("same-as-selected");
                            for (let l = 0; l < sameAsSelected.length; l++) {
                                sameAsSelected[l].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    selected.click();
                });
                itemsDiv.appendChild(optionDiv);
            }

            customSelects[i].appendChild(itemsDiv);
            selectedDiv.addEventListener("click", function (e) {
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }

        function closeAllSelect(elmnt) {
            let items = document.getElementsByClassName("select-items");
            let selected = document.getElementsByClassName("select-selected");
            let arrNo = [];

            for (let i = 0; i < selected.length; i++) {
                if (elmnt == selected[i]) {
                    arrNo.push(i);
                } else {
                    selected[i].classList.remove("select-arrow-active");
                }
            }

            for (let i = 0; i < items.length; i++) {
                if (arrNo.indexOf(i)) {
                    items[i].classList.add("select-hide");
                }
            }
        }

        document.addEventListener("click", closeAllSelect);
    });
</script>