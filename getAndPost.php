<?php
  // if(empty($_POST['user'])||empty($_POST['age'])){
  //   echo "<h1>資料有誤，請重新填寫</h1>";
  //   exit();
  // }
  // echo "Hi " . $_POST['user'] . '.<br/>';
  // echo "You are " . $_POST['age'] ." years old.";
  if(empty($_POST['user'])||empty($_POST['age'])){
    echo "<h1>資料有誤，請重新填寫</h1>";
    exit();
  }
  echo "Hi " . $_POST['user'] . '.<br/>';
  echo "You are " . $_POST['age'] ." years old.";
  
?>