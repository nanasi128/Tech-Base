<?php
    $age = 21;
    echo "age <- $age"."<br/>";
    if($age >= 18){
        echo "運転免許取得可";
    }else{
        echo "運転免許取得不可";
    }
    echo "<br/>";
    
    $age = 85;
    echo "age <- $age"."<br/>";
    if($age < 18){
        echo "運転免許取得不可";
    }else if($age >= 85){
        echo "運転免許を返納しませんか?";
    }else{
        echo "運転免許取得可";
    }
?>
