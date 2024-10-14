<!DOCTYPE html>
<html lang="en">

<?php include './ui-components/head.php' ?>

<body class="bg-blue-50 font-poppins">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="md:bg-blue-100 flex flex-col md:p-4 md:w-64 md:m-5 md:border md:rounded-xl">
            <h1 class="md:text-xl md:font-bold md:mb-8 md:text-blue-600">SiPalingSehat</h1>

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
                            class="hidden md:block md:bg-blue-400 text-white md:py-2 md:px-4 md:rounded">Data Anak</a>
                    </li>
                    <li>
                        <a href="pageAnalisisAnak.php"
                            class="hidden md:block md:bg-gray-400 md:text-white md:py-2 md:px-4 md:rounded md:hover:bg-blue-300">Analisis
                            Anak</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-10">
            <h2 class="text-2xl font-semibold mb-2">Data Pribadi Anak</h2>
            <p class="mb-8">Memasukkan data pribadi anak untuk membantu kami memberikan hasil analisis yang akurat.</p>
            <form class="space-y-4">
                <div class="flex  justify-end ">
                    <label class=" text-sm font-medium  justify-center items-center flex">Nama anak</label>
                    <input type="text"
                        class=" md:w-1/3 h-12 p-2 border border-gray-300 rounded flex justify-center items-center mx-10 text-sm"
                        placeholder="Masukan Nama Anak Anda" />
                </div>
                <div class="flex  justify-end">
                    <label class=" text-sm font-medium  justify-center items-center flex">Berat Badan Anak</label>
                    <input type="text"
                        class=" md:w-1/3 h-12 p-2 border border-gray-300 rounded flex justify-center items-center mx-10 text-sm"
                        placeholder="Masukan Berat Badan Anak Anda" />
                </div>
                <div class="flex  justify-end">
                    <label class=" text-sm font-medium  justify-center items-center flex">Tinggi Badan Anak </label>
                    <input type="text"
                        class=" md:w-1/3 h-12 p-2 border border-gray-300 rounded flex justify-center items-center mx-10 text-sm"
                        placeholder="Masukan Tinggi Badan Anak Anda" />
                </div>
                <div class="flex  justify-end">
                    <label class="text-sm font-medium  justify-center items-center flex">Alergi</label>
                    <input type="text"
                        class=" md:w-1/3 h-12 p-2 border border-gray-300 rounded flex justify-center items-center mx-10 text-sm"
                        placeholder="Masukan Alergi Anak Anda" />
                </div>
                <div class="flex justify-end mr-10">
                    <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded ml-10">Analisis</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>