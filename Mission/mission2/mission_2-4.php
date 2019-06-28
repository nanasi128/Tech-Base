<html>
<head>
    <meta charset = "utf-8">
    <title>sample</title>
</head>
<body>
<?php
    if($_POST != ""){
        $filename = "mission_2-4.txt";
        if($fp = fopen($filename,"a")){
            fwrite($fp, $_POST["comment"]."\n");
            fclose($fp);
        }else{
            $fp = fopen($filename, "w");
            fwrite($fp, $_POST["comment"]."\n");
            fclose($fp);
        }
    }
    $filename = "mission_2-4.txt";
    $fp = fopen($filename,"r");
    echo "送信内容を受け付けました！<br/>";
    echo "コメント履歴<br/>";
    while($comments = fgets($fp)){
        echo "$comments<br/>";
    }
    fclose($fp);
    ?>
    <a href = "https://tb-210037.tech-base.net/Mission/mission2/mission_2-4.html">
        <button type = "button">戻る</button>
    </a>
</body>
</html>
