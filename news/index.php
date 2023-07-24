<?php
session_start();
require_once("../db_connect.php");

$sql = "SELECT * FROM news WHERE delete_flg=0 and public_flg=1";

$stm = $pdo->prepare($sql);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);



#INSERT INTO profile ('name','age','address') VALUES (:name,:age,:address)
#$stm->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
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
            echo $data['id'];?>
            <a href ="single.php?id= <?php $data['id'];?>"><?php echo $data['title'];?></a>
        <?php
            echo $data['update_date']; 
            echo "<br></br>";

        }
    ?>

</body>
</html>