<?php
include 'includes/dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("INSERT INTO drivers (name, email, phone, password) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$name, $email, $phone, $password])) {
        header("Location: login.php");
    } else {
        echo "Error: Could not register.";
    }
}
?>

<form method="POST" action="">
    <label>Name:</label><input type="text" name="name" required><br>
    <label>Email:</label><input type="email" name="email" required><br>
    <label>Phone:</label><input type="text" name="phone" required><br>
    <label>Password:</label><input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>
