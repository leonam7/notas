<?php
include "connection.php";
$conn = connection(); 

try {
    
    $nome = (isset($_POST["nome"]) && $_POST["nome"] !=null) ? $_POST['nome'] :"";
    $disciplina = (isset($_POST["disciplina"]) && $_POST["disciplina"] !=null) ? $_POST["disciplina"] :"";
    $nota1 = (isset($_POST["nota_1"]) && $_POST["nota_1"] !=null) ? $_POST["nota_1"] :"";
    $nota_2 = (isset($_POST["nota_2"]) && $_POST["nota_2"] !=null) ? $_POST["nota_2"] :"";
    
    $stmt = $conn->prepare("INSERT INTO ratuff2rowij3xi9.notas (nome,disciplina,nota_1,nota_2) 
    VALUES (:nome, :disciplina, :nota_1, :nota_2)");
    $stmt ->bindParam(':nome',$nome);
    $stmt ->bindParam(':disciplina',$disciplina);
    $stmt ->bindParam(':nota_1',$nota_1);
    $stmt ->bindParam(':nota_2',$nota_2);
    echo $nome;
    echo $nota_1;
if ($nome != "" and $disciplina != "" ) {
        if ($nota_1!="" and $nota_2 !=""){
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
