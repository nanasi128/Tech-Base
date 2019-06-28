<html>
<head>
    <meta charset = "utf-8">
    <title> sample </title>
</head>
<body>
    <td>送信内容を受け付けました！</td><br/>
    <td>コメント:</td><td><?php echo $_POST["comment"] ?></td>
</body>
</html>
<?php
    if($_POST != ""){
        $filename = "mission_2-3.txt";
        if($fp = fopen($filename,"a")){
            fwrite($fp, $_POST["comment"]."\n");
            fclose($fp);
        }else{
        $fp = fopen($filename, "w");
        fwrite($fp, $_POST["comment"]."\n");
        fclose($fp);
        }
    }
?>
