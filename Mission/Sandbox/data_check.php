<?php
    require("db_login.php");
    
    $sql ='SELECT * FROM Songlist';
    $stmt = $pdo -> query($sql);
    $result = $stmt -> fetchAll();
    foreach($result as $row){
       /*echo <<< EOM
        $row['id'].','.$row['difficulty'].','.$row['title'].','.$row['notes'].','.$row['diff_val'].','.$row['map_const'].'<br/>'."<hr>" EOM;*/
        echo $row['id'].',';
        echo $row['difficulty'].',';
        echo $row['title'].',';
        echo $row['notes'].',';
        echo $row['diff_val'].',';
        echo $row['map_const'].'<br/>';
        echo "<hr>";
    }

?>
