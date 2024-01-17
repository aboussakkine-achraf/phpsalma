<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $stmt = $conn->prepare("UPDATE users SET name=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $email, $id);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="update.php">
    ID: <input type="text" name="id"><br>
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Update User">
</form>
