<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Petugas</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        customRed: "#D32F2F",  /* Warna merah berani */
                        customDarkRed: "#B71C1C",  /* Warna merah gelap */
                        customBlack: "#212121",  /* Warna hitam yang kuat */
                        customGray: "#616161"  /* Warna abu-abu untuk teks */
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gradient-to-r from-customDarkRed via-customRed to-customBlack min-h-screen flex items-center justify-center p-6">
    <!-- Container -->
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-xl shadow-xl dark:border dark:border-gray-700 sm:max-w-md xl:p-0 dark:bg-gray-800">
            <div class="p-6 space-y-6 sm:p-8">
                <!-- Header -->
                <h1 class="text-4xl font-bold leading-tight tracking-tight text-customBlack md:text-4xl dark:text-white text-center">
                    Login Petugas
                </h1>

                <!-- Form Section -->
                <form class="space-y-6" action="proses_login_petugas.php" method="post">
                    <!-- Username -->
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username Petugas</label>
                        <input type="text" name="username" id="username" class="w-full p-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-customRed focus:border-customRed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan username Anda" required>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" class="w-full p-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-customRed focus:border-customRed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="••••••••" required>
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-customRed dark:bg-gray-700 dark:border-gray-600 dark:ring-offset-gray-800">
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">Ingat saya</label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" name="login_petugas" class="w-full text-white bg-customRed hover:bg-customDarkRed focus:ring-4 focus:ring-customRed font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-customRed dark:hover:bg-customDarkRed transition duration-300 ease-in-out transform hover:scale-105">
                        Login sebagai Petugas
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS (If needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
