<?php

require "conn.php";

// check is form submitted
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    // basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        die("All fields are required!");
    }

    // insert data into the database
    $stmt = $conn->prepare("INSERT INTO contact_tbl (name, email, phone, message) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $name, $email, $phone, $message);


    if ($stmt->execute()) {
        echo "<script> alert('Your message has been sent successfully!.'); window.location.href='../contact_us.php'</script>";
    } else {
        die("Error storing data: " . $stmt->error);
    }

    $stmt->close();

    // close database connection
    $conn->close();
}
