<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iletisim_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
$sql = "SELECT * FROM iletisim";
$result = $conn->query($sql);
echo "<h2>Gönderilen Mesajlar</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Ad Soyad</th><th>Email</th><th>Mesaj</th><th>Tarih</th></tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['ad_soyad'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mesaj'] . "</td>";
        echo "<td>" . $row['tarih'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Henüz mesaj yok.</td></tr>";
}
echo "</table>";
$conn->close();
?>