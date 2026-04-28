<?php

require "conn.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name       = trim($_POST['name'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $phone      = trim($_POST['phone'] ?? '');
    $position   = trim($_POST['position'] ?? '');
    $experience = trim($_POST['experience'] ?? '');
    $city       = trim($_POST['city'] ?? '');
    $message    = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($phone) || empty($position) || empty($experience) || empty($city)) {
        die("All required fields must be filled.");
    }

    $stmt = $conn->prepare(
        "INSERT INTO career_applications (name, email, phone, position, experience, city, message, applied_at)
         VALUES (?, ?, ?, ?, ?, ?, ?, NOW())"
    );
    $stmt->bind_param("sssssss", $name, $email, $phone, $position, $experience, $city, $message);

    if ($stmt->execute()) {
        header("Location: ../career.php?success=1");
        exit;
    } else {
        die("Error saving application: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
