<?php
// Q1 $a　という変数に3を、$b　という変数に７を代入

 $a = 3;
 $b = 7;

 echo $a + $b;
?>


<?php
// Q2 $array_month という配列に1月〜12月の文字列を代入し、
//echoで8月を表示

 $array_month = ["１月","２月","３月","４月","５月","６月",
 "７月","８月","９月","１０月","１１月","１２月"];

 echo $array_month[7];
  ?>


<?php
// Q3 $hello　という変数に　”Hello, “を
//$name という変数にあなたの名前を、　
//$world という変数に　”‘s World!” を代入して、
//各変数を連結させて “Hello, あなたの名前’s World!” と表示
  $hello = "Hello";
  $name = "shiho";
  $world = "'s World!";

 echo $hello . $name . $world;
  ?>


<?php
// Q4 複合演算を使って、echo $tech_boostと実行すると
//「tech boost」と表示
 $tech_boost = "tech";
 $tech_boost .="boost";

 echo $tech_boost;

 ?>


<?php
//Q5 応用　プラグラミング修正
  $calendar_2018 = [

  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" =>"10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018 ["December"];
?>
