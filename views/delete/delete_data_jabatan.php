<?php
include '../../config/database.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM jabatans WHERE id='$id'");

header('Location: ../../app/index.php?page=data-jabatan');
