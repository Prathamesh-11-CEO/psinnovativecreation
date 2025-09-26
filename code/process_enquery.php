<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require "conn.php";

$mail = new PHPMailer(true);

// check is form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $user_type = $_POST['user_type']; // Industry or Consultant

  // basic validation
  if (empty($name) || empty($email) || empty($mobile) || empty($user_type)) {
    die("All fields are required!");
  }

  // insert data into the database
  $stmt = $conn->prepare("INSERT INTO enquery_tbl (name, email, mobile, user_type) VALUES (?, ?, ?, ?)");

  $stmt->bind_param("ssss", $name, $email, $mobile, $user_type);

  // Add the current date and time
  date_default_timezone_set('Asia/Kolkata');
  $dateTime = date('Y-m-d H:i:s');

  // Emojis
  $emojiArray = ['🎉', '🚀', '🔥', '🌍', '🎯'];
  $randomEmoji = $emojiArray[array_rand($emojiArray)]; // Pick a random emoji

  $mail->CharSet = 'UTF-8';
  // send data
  try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ashuabhi1008@gmail.com'; // Your Gmail address
    $mail->Password = 'ljul uanl kvpq dkae'; // App password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('ashuabhi1008@gmail.com', 'New Enquiry ' . $randomEmoji);
    $mail->addAddress('info@psinnovativecreation.com'); // Recipient email

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Enquiry Received';
    $mail->Body = "
            <p>A new enquiry has been submitted with the following details:</p>
            <table border='1' style='margin: auto;'>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Name:</strong>
                  </td>
                  <td style='padding: 10px;'>$name</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Email:</strong>
                  </td>
                  <td style='padding: 10px;'>$email</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Mobile:</strong>
                  </td>
                  <td style='padding: 10px;'>$mobile</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>User Type:</strong>
                  </td>
                  <td style='padding: 10px;'>$user_type</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Date: </strong>
                  </td>
                  <td style='padding: 10px;'>$dateTime</td>
                </tr>
            </table>
        ";

    $mail->send();
    // echo 'Email sent successfully!';
  } catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

  if ($stmt->execute()) {
    echo "<script> alert('Data stored successfully in the database.'); window.location.href='../index.php'</script>";
  } else {
    die("Error storing data: " . $stmt->error);
  }

  $stmt->close();
  $conn->close();
}
