<?php

  include("prints.php");
  {
  
    if(isset($_POST['Print']))
  {
       
    $name = mysqli_real_escape_string($conn, $_POST['pname']);
    $email_id = mysqli_real_escape_string($conn,$_POST['email']);
    $phoneno = mysqli_real_escape_string($conn,$_POST['mob']); 
    $size = mysqli_real_escape_string($conn, $_POST['size']);


    $sql = "SELECT * FROM art_gallary WHERE useremail_id='$user_email'" ;

    $result = mysqli_query($conn, $sql);
  
    $tempid = $_SESSION['userid'];
  
  
    $update = "UPDATE `art_gallary` SET `cname`='$name',`cemail_id`='$email_id',`cphno`='$phoneno',`csize`='$size' WHERE useremail_id = '" . $tempid . "'";
    
    mysqli_query($conn, $update);

    header('location:index.php');
  }

  
}

?>