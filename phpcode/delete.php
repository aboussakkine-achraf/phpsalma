<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $id = $_POST["id"];

    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}
?>

<form method="post" action="delete.php">
    ID: <input type="text" name="id"><br>
    <input type="submit" value="Delete User">
</form>
