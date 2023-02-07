<?php
include '../../config/database.php';

$name_jab = $_POST['name_jab'];

$query = mysqli_query($conn, "INSERT INTO jabatans (id, name_jab) VALUES ('','$name_jab')");

header('Location: ../../app/index.php?page=data-jabatan');
