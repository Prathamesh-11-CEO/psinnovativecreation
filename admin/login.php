<?php
session_start();
require "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    $stmt = $conn->prepare("SELECT * FROM login_tbl WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];

        header("Location: dashboard.php");
        exit();
    } else {
        // Set error message
        $error_message = "Invalid username or password";
    }

    $stmt->close();
}
mysqli_close($conn);
?>

<head>
    <title>Admin Login</title>

    <!--Favicon-->
    <link rel="icon" href="img/ps-fev.png" type="image/x-icon" />
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; font-family: Arial, sans-serif; background-color: #666464;">
    <div style="width: 300px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; background-color: #fff; text-align: center;">
        <h3 style="margin-bottom: 20px; color: #333;">Sign In</h3>
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
                Login
            </button><br><br>
            <a href="register.php">Sign Up</a>
        </form>

        <?php if (isset($error_message)): ?>
            <div style="color: #721c24; background-color: #f8d7da; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 10px;">
                <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>

    </div>
</body>