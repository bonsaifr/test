
<?php
session_start();

// Simulated user data
$valid_users = array(
    'Niggle' => 'Niggle1234'
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($valid_users[$username]) && $valid_users[$username] == $password) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit;
    } else {
        header("Location: login.php?error=1");
        exit;
    }
}
?>
