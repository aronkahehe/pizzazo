
<?php
session_start();
require_once "db.php";

$sql="select img_url, name as nev from products";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());

?>