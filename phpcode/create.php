<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $name = $_POST["name"];
    $email = $_POST["email"];

    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="create.php">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Add User">
</form>
