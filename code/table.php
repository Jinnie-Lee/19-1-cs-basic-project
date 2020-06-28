<?php
   $con=mysqli_connect("localhost", "root", "", "ewhaPlaneDB")
   or die("MySQL 접속 실패 !!");
   $sql="
      CREATE TABLE ewhaPlaneTbl
      ( name   VARCHAR(128) NOT NULL,
        ID   CHAR(128) NOT NULL PRIMARY KEY,
        phNum VARCHAR(128),
        birthyear VARCHAR(128),
        birthday VARCHAR(128),
        sex VARCHAR(128),
        password VARCHAR(128) NOT NULL,
		LOGIN_FAIL_COUNT INT NOT NULL,
        ppNum CHAR(128) NOT NULL,
        ill_1 VARCHAR(128),
        ill_2 VARCHAR(128),
        ill_3 VARCHAR(128),
        ill_4 VARCHAR(128),
        BF VARCHAR(128)
      )
   ";
   $ret=mysqli_query($con, $sql);
   if($ret){
      echo "ewhaPlaneTbl이 성공적으로 생성됨";
   }
   else{
      echo "ewhaPlaneTbl 생성 실패!!!"."<br>";
      echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con);
?>