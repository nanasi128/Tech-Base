<?php
    $this_year = 2019;
    echo "2000年から今までのオリンピック開催年<br/>";
    for($i = 2000; $i <= $this_year; ){
        echo "$i<br/>";
        $i += 4;
    }
    
    echo "<br/>foreach文を使った配列要素書き出し<br/>";
    $my_array = array("りんご","ごりら","らっぱ","ぱんだ","だるま");
    $str = "";
    foreach($my_array as $element){
        $str = $str.$element;
        echo "$str<br/>";
    }
?>
