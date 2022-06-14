<?php
include "connection.php";
$conn = connection(); 

try {
    
    $nome = (isset($_POST["nome"]) && $_POST["nome"] !=null) ? $_POST['nome'] :"";
    $disciplina = (isset($_POST["disciplina"]) && $_POST["disciplina"] !=null) ? $_POST["disciplina"] :"";
    $nota1 = (isset($_POST["nota1"]) && $_POST["nota1"] !=null) ? $_POST["nota1"] :"";
    $nota2 = (isset($_POST["nota2"]) && $_POST["nota2"] !=null) ? $_POST["nota2"] :"";
    
    $stmt = $conn->prepare("INSERT INTO ratuff2rowij3xi9.notas (nome,disciplina,nota1,nota2) 
    VALUES (:nome, :disciplina, :nota1, :nota2)");
    $stmt ->bindParam(':nome',$nome);
    $stmt ->bindParam(':disciplina',$disciplina);
    $stmt ->bindParam(':nota1',$nota1);
    $stmt ->bindParam(':nota2',$nota2);
    echo $nome;
    echo $nota1;
if ($nome != "" and $disciplina != "" ) {
        if ($nota1!="" and $nota2 !=""){
        if ($stmt->execute()) {
            echo"Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao tentar efetivar cadastro";
        } 
}
}else {
    echo "nome ou disciplina errados!";
}
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
header("Location: tabela_notas.php");
?>
