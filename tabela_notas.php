<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Notas cadastradas!</h1>
    <div class="container">
        <?php
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>ID</th>";
        echo "<th scope='col'>NOME</th>";
        echo "<th scope='col'>Disciplina</th>";
        echo "<th scope='col'>Nota 1</th>";
        echo "<th scope='col'>Nota 2</th>";
        echo "</tr>";
        echo "</thead>";

        class TableRows extends RecursiveIteratorIterator {
            
            function __construct($it){
                parent ::__construct($it, self::LEAVES_ONLY);
            }
            function current(){
                return "<td>". parent :: current() ."</td>";
            }
            function beginChildren(){
                echo "<tr>";
            }
            function endChildren(){
                echo "</tr>" . "\n";
            }
        }
      
        include "connection.php";
        $conn = connection();

        try {
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * from j0opn8umqajetzdp.notas");
            $stmt->execute();
       
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                echo $v;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        echo "</table>";
        ?>
    </div>

</body>
</html>
