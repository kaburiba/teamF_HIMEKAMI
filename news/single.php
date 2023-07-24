<?php
    session_start();
    require_once("../db_connect.php");
    
    



    $sql = "SELECT * FROM news WHERE id=:id";
    $stm = $pdo->prepare($sql);
    $id = $_GET['id'];
    $stm->bindValue(':id', $id, PDO::PARAM_INT);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        foreach($result as $data){
            echo $data['id'];
            echo $data['title'];
            echo $data['content'];
            echo $data['update_date'];
            echo "<br></br>";
        }
    ?>

</body>
</html>