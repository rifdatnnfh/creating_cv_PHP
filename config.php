<?php
$host = 'localhost';
$db = 'CV_Rfd';
$user = 'rifdatn';
$pwd = 'agustus25';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
