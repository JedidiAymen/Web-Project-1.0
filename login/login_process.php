<?php
require_once 'config.php';

// Function to sanitize user inputs
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $email = sanitize_input($_POST['email']);
    $password = $_POST['password'];
    
    // Validate form data
    $errors = [];
    
    if (empty($email)) {
        $errors[] = "Email is required";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    
    // If no validation errors, proceed with login
    if (empty($errors)) {
        try {
            // Prepare SQL statement to avoid SQL injection
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            
            // Check if user exists
            if ($user = $stmt->fetch()) {
                // Verify password
                if (password_verify($password, $user['password'])) {
                    // Password is correct, start a new session
                    session_start();
                    
                    // Store user data in session variables
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['user_type'] = $user['user_type'];
                    
                    // Redirect based on user type
                    if ($user['user_type'] === 'admin') {
                        header("Location: ../Admin/admin.html");
                    } else {
                        header("Location: ../Home/index.html");
                    }
                    exit();
                } else {
                    // Password is incorrect
                    $login_error = "Invalid email or password";
                }
            } else {
                // User does not exist
                $login_error = "Invalid email or password";
            }
        } catch (PDOException $e) {
            $login_error = "Error: " . $e->getMessage();
        }
    }
}
