<?php 
    // 1. get username from session
    session_start();
    // 2. if no exist redirect to login
    if( ! isset($_SESSION["name"])) {
        header("Location: login.php");
        exit;
    }
    // 3. else echo Hello USERNAME from session
    $name = $_SESSION["name"];
?>

<p>Hello <?= $name ?></p>
<a href="kill.php">Logout</a>