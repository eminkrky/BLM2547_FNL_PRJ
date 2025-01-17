<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iletisim_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO iletisim (ad_soyad, email, mesaj) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Mesajınız başarıyla kaydedildi. <a href='liste.php'>Gönderilen mesajları görüntüle</a>";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>