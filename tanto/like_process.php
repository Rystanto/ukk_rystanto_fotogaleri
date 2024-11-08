<?php
include 'config.php'; // Koneksi ke database

if (isset($_POST['photo_id'])) {
    $photoId = $_POST['photo_id'];

    // Update jumlah like di database
    $query = "UPDATE like SET likes = likes + 1 WHERE likeid = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $photoId);
    $stmt->execute();

    // Mengembalikan respons sukses
    echo json_encode(["success" => true]);
}
?>
