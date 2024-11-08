<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Live gradient background animation */
        @keyframes gradientBackground {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .animated-bg {
            background: linear-gradient(270deg, #ff9a9e, #fad0c4, #fbc2eb);
            background-size: 600% 600%;
            animation: gradientBackground 15s ease infinite;
        }
    </style>
</head>
<body class="animated-bg flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Tambah Foto</h2>
        <form action="upload_photo_process.php" method="POST" enctype="multipart/form-data">
            <!-- Judul Foto -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Judul Foto</label>
                <input type="text" id="title" name="title" class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <!-- Deskripsi Foto -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Deskripsi</label>
                <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            <!-- File Foto -->
            <div class="mb-4">
                <label for="photo" class="block text-gray-700">Unggah Foto</label>
                <input type="file" id="photo" name="photo" class="w-full py-2" accept="image/*" required>
            </div>
            <!-- Tombol Submit -->
            <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-200">Tambah Foto</button>
        </form>
        <p class="text-center text-gray-600 mt-4">
            <a href="index.html" class="text-blue-500 font-semibold hover:underline">Kembali ke Beranda</a>
        </p>
    </div>
</body>
</html>
