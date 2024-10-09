<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Toko Sparepart</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        customRed: "#D32F2F",
                        customDarkRed: "#B71C1C",
                        customBlack: "#212121",
                        customGray: "#616161"
                    },
                    fontFamily: {
                        'body': ['Roboto', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gradient-to-r from-customDarkRed via-customRed to-customBlack min-h-screen flex items-center justify-center p-6">
    <!-- Container -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-md">

        <!-- Header -->
        <div class="bg-customRed text-white text-center py-5">
            <h2 class="text-4xl font-bold">Selamat Datang!</h2>
            <p class="text-lg mt-2">Login di Toko Sparepart Online</p>
        </div>

        <!-- Form Section -->
        <div class="p-6 space-y-6">
            <form action="proses_login.php" method="post" class="space-y-4">

                <!-- Username -->
                <div>
                    <label for="username" class="block text-gray-700 font-semibold mb-1">Username</label>
                    <input type="text" name="username" id="username" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-customRed focus:outline-none transition duration-200" placeholder="Masukkan username Anda" required>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-customRed focus:outline-none transition duration-200" placeholder="Masukkan password Anda" required>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="w-4 h-4 text-customRed border-gray-300 rounded focus:ring-customRed">
                    <label for="remember" class="ml-2 text-gray-600">Ingat saya</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" name="login" class="w-full bg-customRed text-white py-3 rounded-lg hover:bg-customDarkRed transition duration-300 ease-in-out transform hover:scale-105">
                    Login
                </button>
            </form>

            <!-- Links -->
            <div class="text-center">
                <p class="text-gray-600">Belum punya akun? <a href="tambah_pelanggan.php" class="text-customRed hover:underline">Daftar sekarang</a></p>
                
                <!-- Login as Staff Button -->
                <a href="login_petugas.php" class="inline-block mt-4 w-full text-center text-white bg-customBlack py-2 rounded-lg hover:bg-customGray transition duration-300 ease-in-out transform hover:scale-105">
                    Login sebagai petugas
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-customBlack py-4">
            <p class="text-center text-white">Toko Sparepart Online Terpercaya.</p>
        </div>
    </div>

    <!-- Optional Bootstrap JS (If needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
