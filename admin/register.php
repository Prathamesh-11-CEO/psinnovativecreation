<?php
require "conn.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login_tbl (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql)) {
        // header("Location: register.php");
        echo "<script>alert('Register successful!.'); window.location.href= 'login.php';</script>";
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<head>
    <title>Register</title>

    <!--Favicon-->
    <link rel="icon" href="img/ps-fev.png" type="image/x-icon" />
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; font-family: Arial, sans-serif; background-color: #666464;">
    <div style="width: 300px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; background-color: #fff; text-align: center;">
        <h3 style="margin-bottom: 20px; color: #333;">Sign Up</h3>
        <form method="POST">
            <input
                type="text"
                name="username"
                placeholder="Username"
                required
                style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 14px;">
            <input
                type="password"
                name="password"
                placeholder="Password"
                required
                style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 14px;">
            <button
                type="submit"
                style="width: 100%; padding: 10px; background-color: #993939; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
                Submit
            </button><br><br>
            <a href="login.php">Sign In</a>
        </form>
    </div>
</body>