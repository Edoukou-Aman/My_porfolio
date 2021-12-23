
<?php
$host = 'localhost';
$dbname = 'Porfolio';
$username = 'root';
$password = '';

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn ->getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erreur : ".$e->getMessage();

}

$conn = null;


?>