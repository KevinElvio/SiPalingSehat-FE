<!DOCTYPE html>
<html lang="en">

<?php include './ui-components/head.php' ?>

<body class="bg-blue-50 font-poppins">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="md:bg-blue-100 flex flex-col md:p-4 md:w-64 md:m-5 md:border md:rounded-xl">
            <h1 class="text-xl font-bold mb-8 text-blue-600">SiPalingSehat</h1>

            <div class="mt-12 ml-7">
                <button id="menuButton"
                    class="flex flex-col items-center justify-center w-10 h-10 bg-blue-500 rounded-lg focus:outline-none md:hidden ">
                    <span class="block w-6 h-0.5 bg-white mb-1 transition-transform"></span>
                    <span class="block w-6 h-0.5 bg-white mb-1 transition-transform"></span>
                    <span class="block w-6 h-0.5 bg-white transition-transform"></span>
                </button>
            </div>
            <nav>
                <ul>
                    <li class=" md:mb-4">
                        <a href="pageCreateAnak.php"
                            class="hidden md:block  md:bg-gray-400 text-white md:py-2 md:px-4 md:rounded md:hover:bg-blue-300">Data
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
        <div class="flex-1 p-10">
            <h2 class="text-2xl font-semibold mb-2 ">Hasil Analisis Haris</h2>
            <p class="text-justify mt-5 mr-40">Berdasarkan hasil analisis yang Anda minta, Haris mengalami
                kondisi stunting, yang terlihat
                dari tinggi badannya saat ini yang hanya 50 cm. Ini adalah ukuran yang tidak normal, terutama bila
                dibandingkan dengan standar pertumbuhan anak seusianya. Kondisi stunting umumnya disebabkan oleh
                kekurangan gizi kronis selama periode pertumbuhan yang kritis, terutama dalam 1000 hari pertama
                kehidupan anak, yang berpengaruh pada pertumbuhan fisik, serta kesehatan jangka panjang.
                Dalam kasus Haris, tinggi badan 50 cm jauh di bawah standar yang seharusnya, dan ini menandakan bahwa
                dia tidak mendapatkan asupan gizi yang cukup untuk mendukung pertumbuhan yang normal. Jika kondisi ini
                tidak segera diatasi, dikhawatirkan dapat berdampak pada perkembangan kognitif, kemampuan belajar, dan
                kesehatannya di masa depan.
                Langkah-langkah intervensi yang diperlukan termasuk memastikan asupan gizi yang lebih baik dan
                memperbaiki pola makan keluarga, serta meningkatkan kesadaran orang tua mengenai pentingnya gizi
                seimbang bagi pertumbuhan anak.</p>

            <div class="flex items-center justify-center mt-10 mr-40">
                <div class="w-full">
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
                                <td class="border border-gray-300 px-4 py-2">Bubur ayam, telur rebus, susu tinggi
                                    kalsium</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi, ayam kukus, tumis bayam, buah pisang
                                </td>
                                <td class="border border-gray-300 px-4 py-2">Roti gandum dengan keju, jus jeruk segar
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Selasa</td>
                                <td class="border border-gray-300 px-4 py-2">Oatmeal dengan buah (apel, pisang), susu
                                    full cream</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi merah, ikan panggang, tumis wortel &
                                    brokoli</td>
                                <td class="border border-gray-300 px-4 py-2">Kentang rebus, telur dadar, smoothie
                                    alpukat + susu</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Rabu</td>
                                <td class="border border-gray-300 px-4 py-2">Bubur kacang hijau, roti gandum dengan
                                    selai kacang, susu</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi, daging sapi cincang, sup sayuran,
                                    pepaya</td>
                                <td class="border border-gray-300 px-4 py-2">Ubi rebus, jus mangga</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Kamis</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi tim dengan ayam cincang dan wortel,
                                    susu</td>
                                <td class="border border-gray-300 px-4 py-2">Mie ayam sehat dengan sayur hijau, jus
                                    jambu</td>
                                <td class="border border-gray-300 px-4 py-2">Biskuit gandum, susu almond, potongan buah
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Jumat</td>
                                <td class="border border-gray-300 px-4 py-2">Roti gandum dengan telur orak-arik, susu
                                </td>
                                <td class="border border-gray-300 px-4 py-2">Nasi, tahu/tempe goreng, tumis kacang
                                    panjang, semangka</td>
                                <td class="border border-gray-300 px-4 py-2">Bubur jagung manis, jus jeruk</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Sabtu</td>
                                <td class="border border-gray-300 px-4 py-2">Bubur beras merah dengan ayam cincang, susu
                                </td>
                                <td class="border border-gray-300 px-4 py-2">Nasi, ikan bakar, sayur bayam, buah melon
                                </td>
                                <td class="border border-gray-300 px-4 py-2">Pancake dengan sirup buah, jus alpukat</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Minggu</td>
                                <td class="border border-gray-300 px-4 py-2">Roti bakar dengan selai kacang, pisang,
                                    susu</td>
                                <td class="border border-gray-300 px-4 py-2">Nasi, ayam goreng tepung, tumis wortel &
                                    brokoli, apel</td>
                                <td class="border border-gray-300 px-4 py-2">Kentang rebus, telur rebus, jus pepaya</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-end mr-10">
                        <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="text-lg mr-2" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 3v5h8"/><path d="M5 21a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2Z"/><path d="M17 21v-8H7v8"/></g></svg>
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>