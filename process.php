<?php
require_once('config.php');
 ?>
<?php

if (isset($_POST)) {

  $firstname  = $_POST['firstname'];
  $lastname   = $_POST['lastname'];
  $emailadd   = $_POST['emailadd'];
  $phonenum   = $_POST['phonenum'];
  $password   = $_POST['password'];

  $sql = "INSERT INTO users (firstname, lastname, email, phonenum, password) VALUES(?,?,?,?,?)";
  $stmtinsert = $db->prepare($sql);
  $result = $stmtinsert->execute([$firstname, $lastname,$emailadd,$phonenum,$password]);
  if($result){
    echo 'Successfully saved.';
  }else{
    echo 'There were errors while saving the data.';
  }
}else{
  echo 'No data';
}
