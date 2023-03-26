<?php
// Start a session
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve the form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // TODO: Validate and sanitize the input

  // Check if the credentials are valid
  if ($username == 'admin' && $password == 'password') {
    // Set a session variable to remember that the user is logged in
    $_SESSION['loggedin'] = true;

    // Redirect the user to the dashboard page
    header('Location: dashboard.php');
    exit();
  } else {
    // If the credentials are invalid, display an error message
    $error = 'Invalid username or password';
  }
}
?>
