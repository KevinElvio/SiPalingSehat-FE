<!DOCTYPE html>
<html lang="en">

<?php include './ui-components/head.php' ?>

<body class="bg-blue-50 font-poppins">
    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Sidebar -->
        <div class="md:bg-blue-100 flex flex-col p-4 w-full md:w-64 md:m-5 md:border md:rounded-xl">
            <div class="flex">
                <div class="">
                    <button id="menuButton"
                        class="flex flex-col items-center justify-center w-10 h-10 bg-blue-500 rounded-lg focus:outline-none md:hidden ">
                        <span class="block w-6 h-0.5 bg-white mb-1 transition-transform"></span>
                        <span class="block w-6 h-0.5 bg-white mb-1 transition-transform"></span>
                        <span class="block w-6 h-0.5 bg-white transition-transform"></span>
                    </button>
                </div>
                <h1 class="text-xl font-bold mb-8 text-blue-600 mt-1 ml-4">SiPalingSehat</h1>
            </div>
            <nav>
                <ul>
                    <li class="md:mb-4">
                        <a href="pageCreateAnak.php"
                            class="hidden md:block md:bg-gray-400 text-white md:py-2 md:px-4 md:rounded md:hover:bg-blue-300">Data
                            Anak</a>
                    </li>
                    <li>
                        <a href="pageAnalisisAnak.php"
                            class="hidden md:block md:bg-blue-400 md:text-white md:py-2 md:px-4 md:rounded ">Analisis
                            Anak</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-4 md:p-10">
            <h2 class="text-2xl font-semibold mb-2 ">Hasil Analisis Haris</h2>
            <p class="text-justify mt-5">Berdasarkan hasil analisis yang Anda minta, Haris mengalami kondisi stunting,
                yang terlihat dari tinggi badannya saat ini yang hanya 50 cm. Ini adalah ukuran yang tidak normal,
                terutama bila dibandingkan dengan standar pertumbuhan anak seusianya. Kondisi stunting umumnya
                disebabkan oleh kekurangan gizi kronis selama periode pertumbuhan yang kritis, terutama dalam 1000 hari
                pertama kehidupan anak, yang berpengaruh pada pertumbuhan fisik, serta kesehatan jangka panjang. Dalam
                kasus Haris, tinggi badan 50 cm jauh di bawah standar yang seharusnya, dan ini menandakan bahwa dia
                tidak mendapatkan asupan gizi yang cukup untuk mendukung pertumbuhan yang normal. Jika kondisi ini tidak
                segera diatasi, dikhawatirkan dapat berdampak pada perkembangan kognitif, kemampuan belajar, dan
                kesehatannya di masa depan. Langkah-langkah intervensi yang diperlukan termasuk memastikan asupan gizi
                yang lebih baik dan memperbaiki pola makan keluarga, serta meningkatkan kesadaran orang tua mengenai
                pentingnya gizi seimbang bagi pertumbuhan anak.</p>

            <div class="flex items-center justify-center mt-10">
                <div class="w-full overflow-x-auto">
                    <table class="min-w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-blue-400">
                                <th class="border border-gray-300 px-4 py-2 text-white">Hari</th>
                                <th class="border border-gray-300 px-4 py-2 text-white">Pagi</th>
                                <th class="border border-gray-300 px-4 py-2 text-white">Siang</th>
                                <th class="border border-gray-300 px-4 py-2 text-white">Malam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Senin</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi Goreng, Telur Mata Sapi</td>
                                <td class="border border-gray-300 px-4 py-2">Ayam Goreng, Sayur Asem, Nasi Putih</td>
                                <td class="border border-gray-300 px-4 py-2">Sop Ayam, Tahu Tempe Goreng</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Selasa</td>
                                <td class="border border-gray-300 px-4 py-2">Roti Bakar, Susu</td>
                                <td class="border border-gray-300 px-4 py-2">Soto Ayam, Perkedel, Nasi Putih</td>
                                <td class="border border-gray-300 px-4 py-2">Ikan Bakar, Lalapan, Nasi Putih</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Rabu</td>
                                <td class="border border-gray-300 px-4 py-2">Bubur Ayam, Teh Manis</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi Campur, Ayam Bakar, Sambal</td>
                                <td class="border border-gray-300 px-4 py-2">Sayur Lodeh, Tahu Bacem, Nasi Putih</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Kamis</td>
                                <td class="border border-gray-300 px-4 py-2">Omelet, Jus Buah</td>
                                <td class="border border-gray-300 px-4 py-2">Rawon Daging, Nasi Putih</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi Goreng Kambing, Acar</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Jumat</td>
                                <td class="border border-gray-300 px-4 py-2">Lontong Sayur, Teh Tawar</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi Padang, Rendang, Sambal Ijo</td>
                                <td class="border border-gray-300 px-4 py-2">Sate Ayam, Ketupat</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Sabtu</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi Uduk, Tempe Orek, Telur</td>
                                <td class="border border-gray-300 px-4 py-2">Gado-Gado, Kerupuk</td>
                                <td class="border border-gray-300 px-4 py-2">Bakso, Mie Goreng</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Minggu</td>
                                <td class="border border-gray-300 px-4 py-2">Mie Goreng, Telur Rebus</td>
                                <td class="border border-gray-300 px-4 py-2">Pecel Lele, Sambal, Nasi Putih</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi Timbel, Ayam Goreng, Lalapan</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="pageHome.php">
                        <div class="flex justify-end mt-4">
                            <button class="bg-blue-500 text-white py-2 px-4 rounded flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="text-lg mr-2"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <path d="M7 3v5h8" />
                                        <path d="M5 21a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z" />
                                        <path d="M17 21v-8H7v8" />
                                    </g>
                                </svg>
                                Simpan
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>