<?php
  $a = "Hello";
  $b = "World";
  $score = 70 ;
  if($score > 60)
    echo "及格了<br/>";
  else {
    echo "不及格<br/>";
  }
  echo $a . $b ;
  echo "<h1>123</h1>";

  for($i = 0;$i<=10;$i += 1){
    echo $i;
  }
  echo "<br/>";

  $arr = array("w",2,3,4);
  echo "arr length: ". $arr[sizeof($arr)-1] ."<br />";
  echo "arr[0]:".$arr[0]."<br/>";
  var_dump($arr);
  echo "<br/>";
  print_r($arr);
  echo "<br/>";

  function add ($a,$b){
    return $a + $b;
  }
  echo add(1,10);
?>