<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-500 p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <a href="index.html" class="text-white font-bold text-xl">Foto Galeri</a>
        <div class="space-x-4">
            <a href="index.html" class="text-white hover:underline">Home</a>
            <a href="upload_photo.html" class="text-white hover:underline">Tambah Foto</a>
            <a href="photos.php" class="text-white hover:underline">Photo</a>
            <a href="profile.php" class="text-white hover:underline">Profil</a>
            <a href="login.html" class="text-white hover:underline">Logout</a>
        </div>
    </div>
</nav>

<!-- Profile Content -->
<div class="container mx-auto mt-10">
    <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center">
        <!-- Foto Profil -->
        <div class="w-32 h-32 rounded-full overflow-hidden mb-4">
            <img src="uploads/profile.jpg" alt="Foto Profil" class="w-full h-full object-cover">
        </div>

        <!-- Informasi Pengguna -->
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Nama Pengguna</h2>
        <p class="text-gray-600 mb-4">email@example.com</p>

        <!-- Data Tambahan -->
        <div class="text-center mb-4">
            <p class="text-gray-700 font-medium">Bio</p>
            <p class="text-gray-600">Saya seorang fotografer amatir yang menyukai keindahan alam dan seni visual. Misi saya adalah berbagi keindahan yang saya temukan dalam perjalanan saya melalui lensa kamera.</p>
        </div>

        <!-- Tombol Edit dan Logout -->
        <div class="flex space-x-4 mt-4">
            <a href="edit_profile.php" class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-600">Edit Profil</a>
            <a href="logout.php" class="bg-red-500 text-white py-2 px-4 rounded-lg shadow hover:bg-red-600">Logout</a>
        </div>
    </div>
</div>

</body>
</html>
