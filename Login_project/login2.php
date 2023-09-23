<?php  
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'glack';
$db_name = 'creds';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['uname'];
$password = $_POST['pass'];

$query = "SELECT * FROM users WHERE username = ?";
$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
}

if (mysqli_num_rows($result) == 1) {
    // Authentication successful, redirect or perform login action
    echo "Login successful!";
} else {
    // Authentication failed, handle accordingly
    echo "Login failed. Invalid username or password.";
}


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

mysqli_close($conn);

?>  

