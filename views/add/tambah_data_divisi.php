<?php
include '../../config/database.php';

$name_div = $_POST['name_div'];

$query = mysqli_query($conn, "INSERT INTO divisions (id, name_div) VALUES ('','$name_div')");

header('Location: ../../app/index.php?page=data-divisi');
