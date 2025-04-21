<?php 
$ad = $_POST['ad'];
$email = $_POST['email'];

echo "Merhaba, ". htmlspecialchars($ad) . "!<br>";
echo "Email adresin: ". htmlspecialchars($email);
?>