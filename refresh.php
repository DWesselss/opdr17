<?php
$pdo = new PDO("mysql:host=localhost;dbname=jouw_database;charset=utf8","root","");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titel = $_POST['titel'] ?? '';

    $sql = "INSERT INTO items (titel) VALUES (:titel)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':titel' => $titel
    ]);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Refresh test</title>
</head>
<body>

<form method="POST">
<input type="text" name="titel" required>
<button type="submit">Opslaan</button>
</form>

</body>
</html>