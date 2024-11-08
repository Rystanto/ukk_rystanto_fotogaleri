<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-mountain-sunset {
            background-image: url('https://4kwallpapers.com/images/walls/thumbs/19465.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body class="bg-mountain-sunset bg-fixed bg-gray-100">

    <!-- Overlay for better readability -->
    <div class="bg-gray-900 bg-opacity-50 min-h-screen">

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

        <!-- Galeri Foto -->
        <div class="container mx-auto mt-10">
            <h1 class="text-3xl font-bold text-center text-white mb-8">Galeri Foto</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php
                include 'config.php';

                // Ambil data foto dari database
                $query = "SELECT * FROM photo";
                $result = $conn->query($query);

                // Cek jika ada data
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="bg-white rounded-lg shadow-md overflow-hidden">';
                        echo '<img src="' . htmlspecialchars($row['photo_path']) . '" alt="' . htmlspecialchars($row['title']) . '" class="w-full h-48 object-cover">';
                        echo '<div class="p-4">';
                        echo '<h3 class="text-lg font-semibold text-gray-800">' . htmlspecialchars($row['title']) . '</h3>';
                        echo '<p class="text-gray-600 mt-2">' . htmlspecialchars($row['description']) . '</p>';

                        // Like and Comment Buttons
                        echo '<div class="flex justify-between items-center mt-4">';
                        echo '<button onclick="handleLike(this)" class="text-blue-500 hover:text-blue-700 focus:outline-none">👍 Like <span class="likeCount">0</span></button>';
                        echo '<button onclick="toggleCommentBox(this)" class="text-blue-500 hover:text-blue-700 focus:outline-none">💬 Comment</button>';
                        echo '</div>';

                        // Comment Section
                        echo '<div class="mt-4 hidden comment-box">';
                        echo '<input type="text" class="w-full p-2 border rounded mb-2" placeholder="Write a comment...">';
                        echo '<button onclick="addComment(this)" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Post Comment</button>';
                        echo '<div class="commentsList mt-4 space-y-2"></div>';
                        echo '</div>';

                        echo '</div>';  // Close the container for each photo
                        echo '</div>';
                    }
                } else {
                    echo '<p class="text-white text-center">Tidak ada foto yang ditemukan.</p>';
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <script>
        // Handle Like Button
        function handleLike(button) {
            let likeCountSpan = button.querySelector(".likeCount");
            let currentCount = parseInt(likeCountSpan.textContent);
            likeCountSpan.textContent = currentCount + 1;
        }

        // Toggle Comment Box Visibility
        function toggleCommentBox(button) {
            let commentBox = button.parentElement.nextElementSibling;
            commentBox.classList.toggle("hidden");
        }

        // Add Comment to the List
        function addComment(button) {
            let commentBox = button.previousElementSibling; // Input field
            let commentText = commentBox.value.trim();
            if (commentText) {
                let commentsList = button.parentElement.querySelector(".commentsList");
                let newComment = document.createElement("div");
                newComment.textContent = commentText;
                newComment.classList.add("bg-gray-100", "p-2", "rounded");

                // Add new comment to the list
                commentsList.appendChild(newComment);

                // Clear the input box
                commentBox.value = "";
            } else {
                alert("Please write a comment before posting.");
            }
        }
    </script>

</body>

</html>
