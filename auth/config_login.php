<?php
session_start();
include '../classes/connection.php'; // Ensure database connection is properly established

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Sanitize input data
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    // Validate required fields
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "All fields are required!";
        header("Location: ../login.php");
        exit();
    }

    try {
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid email format!";
            header("Location: ../login.php");
            exit();
        }

        // Fetch user from database
        $stmt = $pdo->prepare("SELECT id, name, password FROM users WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify password
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['success'] = "Login successful ! Welcome, " . $user['name'];
                header("Location: ../index.php");
                exit();
            } else {
                $_SESSION['error'] = "Incorrect password !";
            }
        } else {
            $_SESSION['error'] = "No account found with this email!";
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Database error: " . $e->getMessage();
    }

    header("Location: ../login.php");
    exit();
}
?>
