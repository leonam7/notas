<?php
function connection(){
    $servername = "eanl4i1omny740jw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "tib15plrbib03qf8";
    $password = "etq5mj2qhrqz66iy";
    $database = "j0opn8umqajetzdp";
try {
$conn =  new PDO("mysql:host=$servername;database=$database;charset=utf8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;

} catch (PDOException $e) {
    echo "Conexão falhou! error: " . $e->getMessage();
}

}
?>
