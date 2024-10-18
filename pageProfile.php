<!DOCTYPE html>
<html lang="en">
<?php include './ui-components/head.php' ?>
<style>
</style>

<body>
    <div class="fixed px-10 py-5 w-full flex flex-row justify-between sm:ml-[20%]">
        <span class="text-xl cursor-pointer bg-blue-400 text-white px-4 py-1 rounded-md sm:hidden" id="menu-icon">☰</span>
        <div class="text-3xl font-bold">Setting</div>
    </div>

    <div class="menu flex flex-col sm:flex-row">
        <div id="dropdown" class="absolute h-auto w-full mt-16 mb-60 hidden sm:flex sm:flex-col sm:justify-start sm:w-[20%] sm:h-full sm:my-7 bg-cyan-100 font-bold text-white shadow-lg p-4 rounded-lg">
            <div class="text-xl font-bold text-blue-400 mb-4">SiPaling Sehat</div>
            <button class="mb-2 p-2 bg-blue-300 rounded-md text-left" id="profile-button">Profile</button>
            <button class="mb-2 p-2 bg-blue-300 rounded-md text-left" id="account-button">Account</button>
            <button class="mb-2 p-2 bg-red-500 rounded-md text-left sm:mt-[180%]">Logout</button>
        </div>

        <div class="content1 mt-20 pl-7 sm:ml-[20%] sm:w-full ">
            <div class="sub-content1 w-full flex flex-col justify-center sm:flex-row sm:justify-evenly sm:items-center items-center">
                <div class="picture flex flex-col items-center">
                    <div class="title-content text-xl my-5">Profile Picture</div>
                    <img src="assets/images/profile.jpeg" class="rounded-full w-64" alt="">
                </div>
                <div class="button-sub-content1 w-full flex flex-col items-center sm:flex-row sm:ml-28 ">
                    <button class="change-pict text-white font-medium w-[80%] sm:w-64 h-8 bg-blue-400 flex justify-center items-center my-4 rounded-lg">Change Picture</button>
                    <button class="change-pict font-medium w-[80%] h-8 sm:w-64 text-red-500 flex justify-center items-center my-4">Delete Picture</button>
                </div>

            </div>

            <div class="textfield-profile pr-5 my-8 sm:pl-20 sm:w-full">
                <label class="text-gray-400">Profile Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" class="w-full my-2 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">

                <label class="text-gray-400">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" class="w-full my-2 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">

                <label class="text-gray-400">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your email" class="w-full my-2 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">

                <label class="text-gray-400">About Me:</label>
                <textarea id="about" name="about" placeholder="Enter about you" rows="4"
                    class="w-full my-2 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
            </div>
        </div>

        <div class="content-2 mt-28 sm:pl-24 pl-5 sm:ml-[20%]  hidden sm:w-full pr-5 my-8">
            <label class="text-gray-400">Password Old:</label>
            <input type="password" id="old-password" name="old-password" placeholder="Enter your old password"
                class="w-full my-2 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">

            <label class="text-gray-400">Password New:</label>
            <input type="password" id="new-password" name="new-password" placeholder="Enter your new password"
                class="w-full my-2 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>
    </div>

    <script>
        // Fungsi untuk toggle dropdown
        function toggleDropdown() {
            const dropdown = document.getElementById("dropdown");
            dropdown.classList.toggle("hidden");
        }

        // Fungsi untuk menampilkan konten berdasarkan tombol yang ditekan
        function showContent(contentClass) {
            const content1 = document.querySelector('.content1');
            const content2 = document.querySelector('.content-2');
            if (contentClass === 'content1') {
                content1.classList.remove('hidden');
                content2.classList.add('hidden');
            } else {
                content1.classList.add('hidden');
                content2.classList.remove('hidden');
            }
        }

        const dropdown = document.getElementById("dropdown");
        const menuIcon = document.getElementById("menu-icon");
        const profileButton = document.getElementById("profile-button");
        const accountButton = document.getElementById("account-button");

        menuIcon.addEventListener('click', function(e) {
            toggleDropdown();
            e.stopPropagation();
        });

        profileButton.addEventListener('click', function(e) {
            showContent('content1');
            e.stopPropagation();
        });

        accountButton.addEventListener('click', function(e) {
            showContent('content2');
            e.stopPropagation();
        });

        document.addEventListener('click', function(e) {
            if (!dropdown.classList.contains("hidden") && !dropdown.contains(e.target) && !menuIcon.contains(e.target)) {
                toggleDropdown();
            }
        });
    </script>

</body>

</html>