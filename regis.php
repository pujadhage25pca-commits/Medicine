<?php
session_start();
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $username = htmlspecialchars($_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $phno = htmlspecialchars($_POST["phno"]);
    $email = htmlspecialchars($_POST["email"]);
    $addr = htmlspecialchars($_POST["addr"]);

    // Check if username already exists
    $check_username_stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $check_username_stmt->bind_param("s", $username);
    $check_username_stmt->execute();

    if ($check_username_stmt->fetch()) {
        echo "Error: Username already exists!";
        $check_username_stmt->close();
        exit();
    }

    $check_username_stmt->close();

    // Insert user into the database with hashed password
    $stmt = $conn->prepare("INSERT INTO users (username, password, phno, email, addr) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $password, $phno, $email, $addr);

    if ($stmt->execute()) {
        // Registration successful
        $_SESSION['username'] = $username;
        $_SESSION['phno'] = $phno; // Store phone number in session
        $_SESSION['addr'] = $addr; // Store address in session
        header("location: login.php");
        exit();
    } else {
        echo "Error during registration: " . $stmt->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <style>
        body {
            font-family: arial, sans-serif;
            background-image: url('medi1.jpg');
        }

        button {
            background-color: orange;
            color: white;
            padding: 10px 15px;
            margin: 10px 0px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type=text], input[type=password] {
            width: 100%;
            margin: 8px 0;
            padding: 12px 20px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            margin: 10px 5px;
        }

        .container {
            width: 500px;
            margin: 100px auto;
            padding: 20px;
            background-color: lightblue;
        }
    </style>
</head>
<body>
<center>
    <h1>Register Here</h1>
</center>

<div class="container">
    <form action="regis.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <label for="phno">Phno:</label>
        <input type="text" name="phno" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" required>
        <br>
        <label for="addr">Address:</label>
        <input type="text" name="addr" required>
        <br>
        <button type="submit">Register</button>
        <input type="checkbox" checked="checked"> Remember me

        
    </form>
</div>
</body>
</html>
