<!DOCTYPE html>
<html lang="en">

<?php include './ui-components/head.php' ?>

<body class="bg-blue-50 flex items-center justify-center min-h-screen font-poppins">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Register</h2>
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" placeholder="Isi email anda"
                    class="w-full px-3 py-2 border-b-2 border-blue-300 focus:outline-none focus:border-blue-500" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Username</label>
                <input type="text" placeholder="Isi username anda"
                    class="w-full px-3 py-2 border-b-2 border-blue-300 focus:outline-none focus:border-blue-500" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Password</label>
                <input type="password" placeholder="Isi password anda"
                    class="w-full px-3 py-2 border-b-2 border-blue-300 focus:outline-none focus:border-blue-500" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Confirmation Password</label>
                <input type="password" placeholder="Isi confirmation password anda"
                    class="w-full px-3 py-2 border-b-2 border-blue-300 focus:outline-none focus:border-blue-500" />
            </div>

            <a href="pageRegister1.php" class="block text-center w-full py-2 mt-4 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition">Next</a>
        </form>
        <div class="text-center mt-4">
            <a href="pageRegister.php" class="text-sm font-semibold text-blue-600 hover:underline">Sudah punya akun? Login</a>
        </div>
    </div>
</body>

</html>