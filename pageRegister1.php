<!DOCTYPE html>
<html lang="en">

<?php include './ui-components/head.php' ?>

<body class="bg-blue-50 flex items-center justify-center min-h-screen font-poppins">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Register</h2>
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-1">Nama Anak</label>
                <input type="text" placeholder="Isi nama anak anda"
                    class="w-full px-3 py-2 border-b-2 border-blue-300 focus:outline-none focus:border-blue-500" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Umur Anak</label>
                <input type="text" placeholder="Isi umur anak anda"
                    class="w-full px-3 py-2 border-b-2 border-blue-300 focus:outline-none focus:border-blue-500" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Berat Badan Anak</label>
                <input type="text" placeholder="Isi berat badan anak anda"
                    class="w-full px-3 py-2 border-b-2 border-blue-300 focus:outline-none focus:border-blue-500" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Tinggi Badan Anak</label>
                <input type="text" placeholder="Isi tinggi badan anak anda"
                    class="w-full px-3 py-2 border-b-2 border-blue-300 focus:outline-none focus:border-blue-500" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Riwayat Penyakit / Alergi</label>
                <input type="text" placeholder="Isi riwayat / penyakit anak anda"
                    class="w-full px-3 py-2 border-b-2 border-blue-300 focus:outline-none focus:border-blue-500" />
            </div>

            <div class="flex justify-between">
                <a href="pageRegister.php" class="block text-center w-1/3 py-2 mt-4 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition">Previous</a>
                <a href="pageRegister2.php" class="block text-center w-1/3 py-2 mt-4 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition">Next</a>
            </div>

            <!-- <button type="submit"
                class="w-full py-2 mt-4 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition">Next</button> -->
        </form>
    </div>
</body>

</html>