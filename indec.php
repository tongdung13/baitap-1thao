<?php
session_start();
$username = $_POST["name"];
$password = $_POST["pass"];
$arr = array(
    array("admin","admin"),
    array("tongdung","10tongdung10"),
    array("vuivuivuibun","tongdung12")
);
foreach ($arr as $value){
    if ($username == $value[0] && $password == $value[1]){
        $_SESSION["user"] = $username;
        header("location: bai23.php");
     } else {
         echo "nhập lại username và pasword";
          require "bai3.php";
      }
}
//        if ($username == $arr[0][0] && $password == $arr[0][1] || $username == $arr[1][0] && $password == $arr[1][1]
//            || $username == $arr[2][0] && $password == $arr[2][1]) {
//            $_SESSION["user"] = $username;
//            header("location: bai23.php");
//        } else {
//            echo "nhập lại username và pasword";
//            require "bai3.php";
//        }
