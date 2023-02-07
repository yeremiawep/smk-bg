<?php
include '../../config/database.php';

$id = $_POST['id'];
$name_jab = $_POST['name_jab'];

$query = mysqli_query($conn, "UPDATE jabatans SET name_jab='$name_jab' WHERE id='$id'");

header('Location: ../../app/index.php?page=data-jabatan');
