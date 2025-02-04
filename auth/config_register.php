<?php
session_start();
include '../classes/connection.php'; // Database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data sanitization
    $name  = trim(htmlspecialchars($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass  = $_POST['password'];
    $cpass = $_POST['cpassword'];

    // Array to store errors
    $errors = [];

    // Check for empty fields
    if (empty($name) || empty($email) || empty($pass) || empty($cpass)) {
        $errors[] = "All fields are required !";
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address !";
    }

    // Check password match
    if ($pass !== $cpass) {
        $errors[] = "Passwords do not match !";
    }

    // Check password length
    if (strlen($pass) < 6) {
        $errors[] = "Password must be at least 6 characters !";
    }

    // Check if email already exists in the database
    try {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $errors[] = "Email is already in use !";
        }
    } catch (PDOException $e) {
        $errors[] = "Error checking email: " . $e->getMessage();
    }

    // If there are errors, store them in session and redirect
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: ../register.php"); // Redirect back to the registration page
        exit();
    }

    // Hash the password before storing
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // Insert data into the database
    try {
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $hashed_pass);
        $stmt->execute();

        // Get the inserted user ID
        $user_id = $pdo->lastInsertId(); //  Retrieve the new user ID

        // Store user session data
        $_SESSION['user_id'] = $user_id; //  Store the user ID in the session
        $_SESSION['user'] = $name; //  Store the username with the same name used for verification in the navbar
        $_SESSION['success'] = "Account created successfully! Welcome, " . $name;

        // Redirect to homepage
        header("Location: ../index.php");
        exit();
    } catch (PDOException $e) {
        $_SESSION['errors'] = ["An error occurred during registration: " . $e->getMessage()];
        header("Location: ../register.php");
        exit();
    }
}
