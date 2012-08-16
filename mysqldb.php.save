<?php # mysqldb.php - creates a handle to your database.
  $user = "root";
  try {
    $db = new PDO("mysql:host=127.0.0.1;port=3306;dbname=project", $user);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    "mysql connection failed: " . $e->getMessage();
    exit();
  }
?>
