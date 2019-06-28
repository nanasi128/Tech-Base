<?php
    require("db_login.php");
    
    $filename = "CHUNITHM_songlist.csv";
    $fp = fopen($filename, "r");
    $songlist = array();
    $idx = 0;
    while($cache = fgets($fp)){
        $elements = explode(",",$cache);
        for($i = 0; $i < count($elements); $i++){
            $songlist[$idx][$i] = $elements[$i];
            //echo $songlist[$idx][$i];
            //if($i != 4) echo ",";
        }
        //echo "<br/>";
        $idx++;
    }
    
    $sql = "CREATE TABLE IF NOT EXISTS Songlist"
    ."("
    ."id INT AUTO_INCREMENT PRIMARY KEY,"
    ."difficulty char(32),"
    ."title TEXT,"
    ."notes int(32),"
    ."diff_val int(32),"
    ."map_const int(32)"
    .");";
    $stmt = $pdo -> query($sql);
    
    for($i = 1; $i < $idx; $i++){
        $sql = $pdo -> prepare("INSERT INTO Songlist(difficulty, title, notes, diff_val, map_const) VALUES(:difficulty, :title, :notes, :diff_val, :map_const)");
        $sql -> bindParam(':difficulty', $songlist[$i][0], PDO::PARAM_STR);
        $sql -> bindParam(':title',$songlist[$i][1], PDO::PARAM_STR);
        $sql -> bindParam(':notes',$songlist[$i][2], PDO::PARAM_STR);
        $sql -> bindParam(':diff_val',$songlist[$i][3], PDO::PARAM_STR);
        $sql -> bindParam(':map_const',$songlist[$i][4], PDO::PARAM_STR);
        $sql -> execute();
    }

?>
