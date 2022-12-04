<?php
$host = 'localhost';
$user = 'root';
$senha = '';
$db = 'teste';

try{   
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $senha);
    return $conn;   
}catch(PDOException $e){
    die('Erro: ' . $e->getMessage());
}

$sql = "SELECT * FROM noticia WHERE titulo LIKE :s OR noticia LIKE :s OR tags LIKE :s";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':s', '%' . $this->search . '%', PDO::PARAM_STR);

if ($stmt->execute()) {
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
