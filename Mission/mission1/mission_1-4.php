<?php
    $this_year = date("Y");
    $birth_year = 1998;
    $zodiac = 12;
    echo "生まれ年から干支がひとまわりした年: ".($birth_year + $zodiac)."<br/>";
    echo "今年から生まれ年を引いた数(満年齢): ".($this_year - $birth_year)."<br/>";
    echo "生まれ年から干支がふたまわりした年: ".($birth_year + $zodiac * 2)."<br/>";
    echo "生まれてから経験した夏季オリンピックの数: ".(int)(($this_year - $birth_year) / 4)."<br/>";
?>
