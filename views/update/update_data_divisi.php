<?php
include '../../config/database.php';

$id = $_POST['id'];
$name_div = $_POST['name_div'];

$query = mysqli_query($conn, "UPDATE divisions SET name_div='$name_div' WHERE id='$id'");

header('Location: ../../app/index.php?page=data-divisi');
