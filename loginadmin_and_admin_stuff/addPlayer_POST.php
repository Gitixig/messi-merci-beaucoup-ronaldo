<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    include "../db/db.php";

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $height = mysqli_real_escape_string($conn, $_POST['height']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);

    $avatar = "default-avatar.png"; // Ảnh mặc định
    if (!empty($_FILES['avatar']['name'])) {
        $avatarName = basename($_FILES["avatar"]["name"]);
        $targetDir = "../uploads/";
        $targetFile = $targetDir . time() . "_" . $avatarName;

        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedTypes = ["jpg", "jpeg", "png", "gif"];
        if (!in_array($fileType, $allowedTypes)) {
            die("Chỉ chấp nhận file ảnh JPG, JPEG, PNG, GIF.");
        }

        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $targetFile)) {
            $avatar = $targetFile;
        } else {
            die("Lỗi khi tải ảnh lên.");
        }
    }

    $sql = "INSERT INTO `players` (`name`, `dob`, `country`, `height`,`price`, `position`, `avatar`) 
            VALUES ('$name', '$dob', '$country', '$height','$price', '$position', '$avatar')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("location:hahahaha.php");
        exit();
    } else {
        die("Lỗi database: " . mysqli_error($conn));
    }
} else {
    die("Truy cập không hợp lệ.");
}
