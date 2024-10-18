<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100 flex items-center justify-center h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="flex items-center border-b border-gray-300 py-2">
                <img src="img/email.png" alt="Email Icon" class="h-5 w-5 mr-2">
                <input 
                    id="email" 
                    type="email" 
                    placeholder="email@gmail.com" 
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" 
                    required>
            </div>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="flex items-center border-b border-gray-300 py-2">
                <img src="img/lock.png" alt="Lock Icon" class="h-5 w-5 mr-2">
                <input 
                    id="password" 
                    type="password" 
                    placeholder="••••••••" 
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" 
                    required>
                <img id="togglePassword" src="img/visibility.png" alt="Visibility Icon" class="h-5 w-5 cursor-pointer">
            </div>
        </div>

        <div class="flex items-center justify-between mb-4">
            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox text-blue-600">
                <span class="ml-2 text-sm text-gray-700">Remember Me</span>
            </label>
            <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
        </div>
        <button class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Login</button>
        <div class="text-center mt-4">
            <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordInput = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.src = type === 'password' ? 'img/visibility.png' : 'img/visibility-lock.png';
        });
    </script>

</body>
</html>
