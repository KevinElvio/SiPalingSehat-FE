<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi Anak</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-blue-50 font-poppins">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="bg-blue-100 flex flex-col p-4 w-64">
            <h1 class="text-xl font-bold mb-8 text-blue-600">SiPalingSehat</h1>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="#" class="block bg-blue-300 text-blue-800 py-2 px-4 rounded">Data Anak</a>
                    </li>
                    <li>
                        <a href="#" class="block bg-gray-300 text-gray-800 py-2 px-4 rounded">Analisis Anak</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-10">
            <h2 class="text-2xl font-semibold mb-2">Data Pribadi Anak</h2>
            <p class="mb-8">Memasukkan data pribadi anak untuk membantu kami memberikan hasil analisis yang akurat.</p>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium">Nama anak</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Berat Badan Anak</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Tinggi Badan Anak</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded" />
                </div>
                <div>
                    <label class="block text-sm font-medium">Alergi</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded" />
                </div>
                <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Analisis</button>
            </form>
        </div>
    </div>
</body>
</html>