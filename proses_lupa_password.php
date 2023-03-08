<?php
session_start();
include 'config/database.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Include librari phpmailer
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

$aksi = $_GET['aksi'];

if ($aksi == 'lupa_password') {


    $email = $_POST['email'];

    $query = mysqli_query($conn, "SELECT*FROM users WHERE email='$email'");
    $check = mysqli_num_rows($query);
    $res = mysqli_fetch_assoc($query);
    if ($check > 0) {

        $email_hash = base64_encode($email);
        $link = 'http://localhost/simbg/passwordbaru.php?email=' . $email_hash;
        $content = 'Silahkan akses link berikut untuk mereset password ' . $link . '.';


        try {
            $email_pengirim = 'gremory565@gmail.com'; // Isikan dengan email pengirim
            $nama_pengirim = 'PT. Bringin Gigantara Cabang Cempaka Putih'; // Isikan dengan nama pengirim
            $email_penerima = $email; // Ambil email penerima dari inputan form
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = $email_pengirim; // Email Pengirim
            $mail->Password = 'lgqbfpegqicvaduf'; // Isikan dengan Password email pengirim
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
            $mail->setFrom($email_pengirim, $nama_pengirim);
            $mail->addAddress($email_penerima, '');
            $mail->isHTML(true);

            $mail->Subject = 'Reset Password';
            $mail->Body = $content;
            $send = $mail->send();
            $_SESSION['sukses'] = 'Link untuk reset password sudah dikirim  melalui email.';
            header('Location: index.php');
        } catch (Exception $e) {
            echo "<h1>Email gagal dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
            echo '<h1>ERROR<br /><small>Error while sending email: ' . $mail->ErrorInfo . '</small></h1>'; // Aktifkan untuk mengetahui error message
        }
    } else {
        $_SESSION['failed'] = 'Email tidak terdaftar!';
        header('Location: forgotpassword.php');
    }
} else if ($aksi == 'reset_password') {
    $email = $_GET['email'];
    $email = base64_decode($email);
    $password = $_POST['password'];

    $query = mysqli_query($conn, "UPDATE users SET password='$password' WHERE email='$email'");
    if ($query) {
        $_SESSION['sukses'] = 'Password berhasil direset, silahkan login.';
        header('Location: index.php');
    } else {
        //
    }
}
