<!DOCTYPE html>
<html lang="en">
<?php include './ui-components/head.php' ?>
<style>
    body {
        background-image: url('assets/images/Slide 16_9 - 6.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .radial {
        background: radial-gradient(circle, #2389DD, #1887E1);
    }
</style>

<body class="font-poppins">
    <div class="main" id="main">
        <nav class="flex flex-row justify-between mt-5 px-4 w-full sm:mt-5 sm:px-20">
            <img src="assets/images/Logo.png" alt="" class="w-10 h-10 sm:w-12 sm:h-12">
            <div class="bar flex flex-row justify-center space-x-8 text-sm sm:w-full sm:h-full sm:text-xl">
                <button class="w-15 h-10 rounded-lg hover:bg-blue-950 sm:w-[192px] sm:h-[40px] sm:ml-1 sm:mr-1">
                    <p class="text-blue-400 h-full flex flex-col items-center justify-center hover:text-white">Beranda</p>
                </button>
                <button id="jadwal-button" class="w-15 h-10 rounded-lg hover:bg-blue-950 sm:w-[192px] sm:h-[40px] sm:ml-1 sm:mr-1">
                    <p class="text-blue-400 h-full flex flex-col items-center justify-center hover:text-white">Jadwal Anak</p>
                </button>
            </div>
            <button class="profil flex flex-col justify-center items-center mr-5 sm:mr-20">
                <img src="assets/images/profile.jpeg" alt="" class="w-10 h-10 rounded-full sm:w-12 sm:h-12">
                <p class="text-sm sm:text-xl">rasthian</p>
            </button>

        </nav>



        <div class="title1 font-bold text-[20px] sm:text-[30px] px-4 sm:px-20 mb-6">
            Data Anak
        </div>

        <div class="content1 flex flex-col sm:flex-row flex-wrap px-4 sm:px-16 gap-4">
            <!-- Card 1 -->
            <div class="card1 mx-2 px-3 py-7 flex flex-col radial text-white rounded-tl-3xl rounded-tr-[140px] rounded-bl-3xl rounded-br-3xl h-[300px] sm:h-[330px] w-full sm:w-[14%] max-w-[250px] min-w-[250px]">
                <p class="text-xl font-bold">Anak Ke 1</p>
                <p class="text-lg">Haris Firman</p>
                <div class="data1 flex space-x-4 text-sm mt-3">
                    <ul>
                        <li>Berat Badan</li>
                        <li>Tinggi Badan</li>
                        <li>Stunting</li>
                        <li>Alergi</li>
                        <li>Hasil Analisis</li>
                    </ul>
                    <ul>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                    </ul>
                    <ul>
                        <li>15kg</li>
                        <li>50cm</li>
                        <li>Tidak Stunting</li>
                        <li>Kacang, Udang</li>
                    </ul>
                </div>
                <p class="text-sm mt-1">Anak ini sehat dan tidak mengalami stunting, perlu di pertahankan</p>
                <div class="analisiscard flex flex-row mt-7 justify-end font-bold text-m">
                    <a href="#">Analisis >></a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card1 mx-2 px-3 py-7 flex flex-col radial text-white rounded-tl-3xl rounded-tr-[140px] rounded-bl-3xl rounded-br-3xl h-[300px] sm:h-[330px] w-full sm:w-[14%] max-w-[250px] min-w-[250px]">
                <p class="text-xl font-bold">Anak Ke 2</p>
                <p class="text-lg">Khisan Afif</p>
                <div class="data1 flex space-x-4 text-sm mt-3">
                    <ul>
                        <li>Berat Badan</li>
                        <li>Tinggi Badan</li>
                        <li>Stunting</li>
                        <li>Alergi</li>
                        <li>Hasil Analisis</li>
                    </ul>
                    <ul>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                        <li>:</li>
                    </ul>
                    <ul>
                        <li>15kg</li>
                        <li>50cm</li>
                        <li>Tidak Stunting</li>
                        <li>Kacang, Udang</li>
                    </ul>
                </div>
                <p class="text-sm mt-1">Anak ini sehat dan tidak mengalami stunting, perlu di pertahankan</p>
                <div class="analisiscard flex flex-row mt-7 justify-end font-bold text-m">
                    <a href="#">Analisis >></a>
                </div>
            </div>

            <!-- Add Data Button -->
            <button class="card1 mx-2 flex flex-col justify-center items-center border-4 border-blue-400 text-blue-400 text-lg sm:text-xl font-bold rounded-tl-3xl rounded-tr-[140px] rounded-bl-3xl rounded-br-3xl h-[300px] sm:h-[330px] w-full sm:w-[14%] max-w-[250px] min-w-[250px]">
                <img src="assets/images/gg_add.png" alt="">
                <p>Tambah Data Anak</p>
            </button>
        </div>

        <div id="jadwal-section" class="title2 sm:ml-16  title1 font-bold text-[20px] sm:text-[30px] px-4 mb-2 mt-20">
            Jadwal Makan Anak
        </div>
        <div class="content2 flex flex-col items-center w-full h-screen">
            <div class="main-content2 w-full max-w-[1800px] p-4">
                <div class="header-bar w-full text-white flex justify-between items-center rounded-t-lg">
                    <div class="list-title-box flex flex-row">
                        <div class="title-box h-[60px] sm:h-[50px] w-[100px] sm:w-[200px] bg-blue-950 text-white text-lg sm:text-2xl font-medium flex justify-center items-center rounded-t-lg mx-2">
                            Anak 1
                        </div>
                        <div class="title-box h-[60px] sm:h-[50px] w-[100px] sm:w-[200px] bg-blue-950 text-white text-lg sm:text-2xl font-medium flex justify-center items-center rounded-t-lg mx-2">
                            Anak 2
                        </div>
                    </div>
                </div>

                <div class="kalender w-full md:w-[60%] h-[300px] md:h-[675px] bg-white shadow-2xl rounded-xl flex flex-col items-center py-1">
                    <ul class="w-full flex justify-evenly text-lg sm:text-2xl text-gray-400 my-5 sm:my-10">
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">MON</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">SUN</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">TUE</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">WED</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">THU</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">FRI</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">SAT</button>
                    </ul>
                    <ul class="w-full flex justify-evenly text-lg sm:text-2xl sm:my-10">
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">18</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">19</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">20</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">21</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">22</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">23</button>
                        <button class="focus:outline-none hover:bg-blue-400 rounded-lg hover:text-white transition-colors">24</button>
                    </ul>
                    <ul class="w-[95%] flex justify-evenly text-sm sm:text-2xl font-medium my-5 sm:my-10">
                        <button class="w-10 sm:w-32 h-6 sm:h-12 sm:rounded-xl rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Pagi</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 sm:rounded-xl rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Pagi</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 sm:rounded-xl rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Pagi</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 sm:rounded-xl rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Pagi</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 sm:rounded-xl rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Pagi</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 sm:rounded-xl rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Pagi</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 sm:rounded-xl rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Pagi</button>
                    </ul>
                    <ul class="w-[95%] flex justify-evenly text-xs sm:text-2xl font-medium my-5 sm:my-10">
                        <button class="w-10 sm:w-32 h-6 sm:h-12 rounded-md sm:rounded-xl bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Siang</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 rounded-md sm:rounded-xl bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Siang</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 rounded-md sm:rounded-xl bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Siang</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 rounded-md sm:rounded-xl bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Siang</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 rounded-md sm:rounded-xl bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Siang</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 rounded-md sm:rounded-xl bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Siang</button>
                        <button class="w-10 sm:w-32 h-6 sm:h-12 rounded-md sm:rounded-xl bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Siang</button>
                    </ul>
                    <ul class="w-[95%] flex justify-evenly text-sm sm:text-2xl font-medium my-5 sm:my-10">
                        <button class="w-16 sm:w-32 h-6 sm:h-12 sm:rounded-lg  rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Malam</button>
                        <button class="w-16 sm:w-32 h-6 sm:h-12 sm:rounded-lg  rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Malam</button>
                        <button class="w-16 sm:w-32 h-6 sm:h-12 sm:rounded-lg  rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Malam</button>
                        <button class="w-16 sm:w-32 h-6 sm:h-12 sm:rounded-lg  rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Malam</button>
                        <button class="w-16 sm:w-32 h-6 sm:h-12 sm:rounded-lg  rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Malam</button>
                        <button class="w-16 sm:w-32 h-6 sm:h-12 sm:rounded-lg  rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Malam</button>
                        <button class="w-16 sm:w-32 h-6 sm:h-12 sm:rounded-lg  rounded-md bg-orange-100 flex justify-center items-center focus:outline-none hover:bg-blue-400 hover:text-white transition-colors">Malam</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pop-up w-full h-screen flex-col bg-[rgba(75,75,75,0.3)] items-center justify-center hidden " id="popup">
        <div class="box h-auto w-[95%] rounded-xl bg-white px-7 py-5 sm:w-[40%] lg:h-[40%]">
            <div class="title text-2xl font-bold mb-4">Jadwal Makan Hari ini</div>
            <div class="sub-content flex flex-wrap gap-5">
                <div class="karbohidrat">
                    <div class="font-bold">Karbohidrat</div>
                    <div class="tabel flex flex-row gap-1">
                        <ul class="flex flex-col">
                            <li class="flex items-center">
                                <img src="assets/images/menu (4).png" class="w-3 h-3 mr-2"> Nasi
                            </li>
                            <li class="flex items-center">
                                <img src="assets/images/menu (4).png"" class=" w-3 h-3mr-2"> Nasi Merah
                            </li>
                            <li class="flex items-center">
                                <img src="assets/images/menu (4).png" class="w-3 h-3mr-2"> Singkong
                            </li>
                        </ul>
                        <ul class="flex flex-col">
                            <li>200 gram</li>
                            <li>200 gram</li>
                            <li>200 gram</li>
                        </ul>
                    </div>
                </div>

                <div class="buah">
                    <div class="font-bold">Buah</div>
                    <div class="tabel flex flex-row gap-1">
                        <ul class="flex flex-col">
                            <li class="flex items-center">
                                <img src="assets/images/menu (2).png" class="w-3 h-3mr-2"> Pepaya
                            </li>
                            <li class="flex items-center">
                                <img src="assets/images/menu (2).png" class="w-3 h-3mr-2"> Semangka
                            </li>
                        </ul>
                        <ul class="flex flex-col">
                            <li>200 gram</li>
                            <li>200 gram</li>
                        </ul>
                    </div>
                </div>

                <div class="sayur">
                    <div class="font-bold">Sayur</div>
                    <div class="tabel flex flex-row gap-1">
                        <ul class="flex flex-col">
                            <li class="flex items-center">
                                <img src="assets/images/menu (3).png" class="w-3 h-3mr-2"> Sayur Bayam
                            </li>
                            <li class="flex items-center">
                                <img src="assets/images/menu (3).png" class="w-3 h-3mr-2"> Sayur Asam
                            </li>
                        </ul>
                        <ul class="flex flex-col">
                            <li>200 gram</li>
                            <li>200 gram</li>
                        </ul>
                    </div>
                </div>

                <div class="lauk-pauk">
                    <div class="font-bold">Lauk Pauk</div>
                    <div class="tabel flex flex-row gap-1">
                        <ul class="flex flex-col">
                            <li class="flex items-center">
                                <img src="assets/images/menu (1).png" class="w-3 h-3mr-2"> Tempe
                            </li>
                            <li class="flex items-center">
                                <img src="assets/images/menu (1).png" class="w-3 h-3mr-2"> Ayam
                            </li>
                        </ul>
                        <ul class="flex flex-col">
                            <li>200 gram</li>
                            <li>200 gram</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <button id="closePopup" class="mt-4 p-2 bg-red-400 rounded text-white">Close</button>
    </div>
    </div>
    </div>
    <script>
        const buttons = document.querySelectorAll('.kalender ul button');
        const popup = document.getElementById('popup');
        const closePopup = document.getElementById('closePopup');
        const main = document.getElementById('main');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                popup.classList.remove('hidden');
                popup.classList.add('flex');
                main.classList.add('hidden');
            });
        });

        closePopup.addEventListener('click', () => {
            popup.classList.add('hidden');
            main.classList.remove('hidden');
        });
  // Scroll to the "jadwal-section" when the jadwal button is clicked
const jadwalButton = document.getElementById("jadwal-button");
const jadwalSection = document.getElementById("jadwal-section");

jadwalButton.addEventListener('click', function() {
    jadwalSection.scrollIntoView({ behavior: "smooth" });
});


    </script>

</body>

</html>