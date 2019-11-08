<?php
session_start();
require_once 'fn.php';


if ((isset($_POST["btn_submit"])) && ($_POST["btn_submit"] == "1")) {
    $idname=$_POST["name_id"];
    $sql="SELECT * FROM users WHERE name_id = '$idname'  ";
    $qr=select($sql); 
    $total=count($qr);
    $rs=$qr[0]; 
    $userMessage=$rs['name_id'];
  
      if ( $_POST["name_id"] == $userMessage  ) {
      $_SESSION['name']="$idname";
      header("Location:Register.php");
      echo "1";
      }else {
        echo $idname;
        $_SESSION['name']="$idname";
        $data=array(
            "name_id"=>"$idname",
            "u_date"=>date("Y-m-d"),
            "u_time"=>date("H:i:s")
        );
        insert("users",$data);
        header("Location:Register.php");
       // header("Location:index.php");
      /// header("Location:cdfrom2.php");
      }
      
  };
  $idname=$_SESSION['name'];
  $sql="SELECT * FROM users WHERE name_id = '$idname'  ";
  $qr=select($sql); 
  $total=count($qr);
  $rs=$qr[0]; 
  $userMessage=$rs['name_id'];
  if ( $userMessage == ""  ) {
    header("Location:index.php");
    //echo "-".$_SESSION['name'].$userMessage ;
    echo "10";
    }
  if ( $idname != $userMessage  ) {
    header("Location:index.php");
    //echo "-".$_SESSION['name'].$userMessage ;
    echo "11";
    }