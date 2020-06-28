<?php
   $con=mysqli_connect("localhost", "root", "", "")
   or die("MySQL 접속 실패!!");
   
   $sql="CREATE DATABASE ewhaPlaneDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
   $ret=mysqli_query($con, $sql);
   
   if($ret){
      echo "ewhaPlaneDB가 성공적으로 생성됨.";
   }
   else{
      echo "ewhaPlaneDB 생성 실패!!!"."<br>";
      echo "실패 원인 : ".mysqli_error($con);
   }
   mysqli_close($con);
?>