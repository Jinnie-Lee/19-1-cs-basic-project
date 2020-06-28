<?php
   $con=mysqli_connect("localhost", "root", "", "ewhaPlaneDB")
   or die("MySQL 접속 실패!!");
   $sql="
      INSERT INTO ewhaPlaneTbl VALUES
      (HEX(AES_ENCRYPT('류상연', 'NaMe!@?')), 'manager', HEX(AES_ENCRYPT('01011111111', 'PhNb!@#*')), HEX(AES_ENCRYPT('1999', 'year!')), '0506', 'female', SHA2('manager1234', 512), 0,
	  SHA2('M11111111', 512), HEX(AES_ENCRYPT('영양', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), NULL),
      (HEX(AES_ENCRYPT('이고은', 'NaMe!@?')), 'LKE', HEX(AES_ENCRYPT('01022222222', 'PhNb!@#*')), HEX(AES_ENCRYPT('1973', 'year!')), '0921', 'female', SHA2('LKE5678', 512), 3,
	  SHA2('M22222222', 512), HEX(AES_ENCRYPT('신경', 'disease!')), HEX(AES_ENCRYPT('소화', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), NULL),
      (HEX(AES_ENCRYPT('이지원', 'NaMe!@?')), 'LJW', HEX(AES_ENCRYPT('01033333333', 'PhNb!@#*')), HEX(AES_ENCRYPT('2010', 'year!')), '0314', 'female', SHA2('LJW90!@', 512), 1,
	  SHA2('M33333333', 512), HEX(AES_ENCRYPT('시각', 'disease!')), HEX(AES_ENCRYPT('골격', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), NULL),
      (HEX(AES_ENCRYPT('신현주', 'NaMe!@?')), 'SHJ', HEX(AES_ENCRYPT('01044444444', 'PhNb!@#*')), HEX(AES_ENCRYPT('1985', 'year!')), '0327', 'female', SHA2('SHJ#$%^', 512), 0,
	  SHA2('M44444444', 512), HEX(AES_ENCRYPT('정신', 'disease!')), HEX(AES_ENCRYPT('호흡', 'disease!')), HEX(AES_ENCRYPT('영양', 'disease!')), HEX(AES_ENCRYPT('시각', 'disease!')), NULL),
	  (HEX(AES_ENCRYPT('김창식', 'NaMe!@?')), 'KCS', HEX(AES_ENCRYPT('01055555555', 'PhNb!@#*')), HEX(AES_ENCRYPT('1964', 'year!')), '0315', 'male', SHA2('KCS5214', 512), 2,
	  SHA2('M55555555', 512), HEX(AES_ENCRYPT('순환', 'disease!')), HEX(AES_ENCRYPT('감염', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), NULL),
	  (HEX(AES_ENCRYPT('류현정', 'NaMe!@?')), 'RHJ', HEX(AES_ENCRYPT('01066666666', 'PhNb!@#*')), HEX(AES_ENCRYPT('1989', 'year!')), '0605', 'female', SHA2('RHJ0605', 512), 0,
	  SHA2('M66666666', 512), HEX(AES_ENCRYPT('정신', 'disease!')), HEX(AES_ENCRYPT('청각', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), NULL),
	  (HEX(AES_ENCRYPT('이하양', 'NaMe!@?')), 'LHY', HEX(AES_ENCRYPT('01077777777', 'PhNb!@#*')), HEX(AES_ENCRYPT('1976', 'year!')), '0313', 'female', SHA2('LHY0313', 512), 1,
	  SHA2('M77777777', 512), HEX(AES_ENCRYPT('감염', 'disease!')), HEX(AES_ENCRYPT('소화', 'disease!')), HEX(AES_ENCRYPT('시각', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), NULL),
	  (HEX(AES_ENCRYPT('이창민', 'NaMe!@?')), 'LCM', HEX(AES_ENCRYPT('01088888888', 'PhNb!@#*')), HEX(AES_ENCRYPT('1965', 'year!')), '0205', 'male', SHA2('LCM0205', 512), 0,
	  SHA2('M88888888', 512), HEX(AES_ENCRYPT('정신', 'disease!')), HEX(AES_ENCRYPT('골격', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), NULL),
	  (HEX(AES_ENCRYPT('신건희', 'NaMe!@?')), 'SKH', HEX(AES_ENCRYPT('01099999999', 'PhNb!@#*')), HEX(AES_ENCRYPT('1997', 'year!')), '0718', 'male', SHA2('SKH0718', 512), 2,
	  SHA2('M99999999', 512), HEX(AES_ENCRYPT('정신', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), NULL),
	  (HEX(AES_ENCRYPT('이상협', 'NaMe!@?')), 'LSH', HEX(AES_ENCRYPT('01010101010', 'PhNb!@#*')), HEX(AES_ENCRYPT('2014', 'year!')), '1020', 'male', SHA2('LSH1020', 512), 0,
	  SHA2('M10101010', 512), HEX(AES_ENCRYPT('순환', 'disease!')), HEX(AES_ENCRYPT('호흡', 'disease!')), HEX(AES_ENCRYPT('신경', 'disease!')), HEX(AES_ENCRYPT(' ', 'disease!')), NULL)
   ";
   
   $ret=mysqli_query($con, $sql);
   if($ret){
      echo "ewhaPlaneTbl이 데이터가 성공적으로 입력됨.";
   }
   else{
      echo "ewhaPlaneTbl 데이터 입력 실패!!!"."<br>";
      echo "실패 원인 : ".mysqli_error($con);
   }
   $sql2="ALTER table ewhaPlaneTbl ADD COLUMN bucket_Year int NOT NULL";
   $ret2=mysqli_query($con, $sql2);
   
   $sql3="SELECT AES_DECRYPT(UNHEX(birthyear), 'year!') as birthyear_d,name,ID,phNum,birthyear,birthday,sex,password,ppNum,ill_1,ill_2,ill_3,ill_4 from ewhaPlaneDB.ewhaPlaneTbl";
   $ret3=mysqli_query($con, $sql3);
   $now_year=(string)(date("Y",time()));
   
   if($ret3){
      while($row=mysqli_fetch_array($ret3))
      {
         if($now_year-$row['birthyear_d']>=60)
            $bucket_year=34;
         else if(($now_year-$row['birthyear_d'])>=50&&($now_year-$row['birthyear_d'])<60)
            $bucket_year=23;
         else if(($now_year-$row['birthyear_d'])>=40&&($now_year-$row['birthyear_d'])<50)
            $bucket_year=61;
         else if(($now_year-$row['birthyear_d'])>=30&&($now_year-$row['birthyear_d'])<40)
            $bucket_year=12;
         else if(($now_year-$row['birthyear_d'])>=20&&($now_year-$row['birthyear_d'])<30)
            $bucket_year=47;
         else if(($now_year-$row['birthyear_d'])>=10&&($now_year-$row['birthyear_d'])<20)
            $bucket_year=95;
         else
            $bucket_year=2;
         $sql4="UPDATE ewhaPlaneTbl SET bucket_Year='".$bucket_year."' WHERE birthyear='".$row['birthyear']."'";
         $ret4=mysqli_query($con, $sql4);
      }
   }
   
   $sql4="SELECT AES_DECRYPT(UNHEX(name), 'NaMe!@?') as name1, ID, AES_DECRYPT(UNHEX(phNum), 'PhNb!@#*') as phNum1, 
   AES_DECRYPT(UNHEX(birthyear), 'year!') as birthyear, birthday, sex, password, ppNum, 
   AES_DECRYPT(UNHEX(ill_1), 'disease!') as ill_1, AES_DECRYPT(UNHEX(ill_2), 'disease!') as ill_2, AES_DECRYPT(UNHEX(ill_3), 'disease!') as ill_3, 
   AES_DECRYPT(UNHEX(ill_4), 'disease!') as ill_4, BF
   FROM ewhaPlaneTbl";
   $ret4=mysqli_query($con,$sql4);
   if($ret4)
   {
      while($row=mysqli_fetch_array($ret4)){
        $userarray = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
      $i1 = $row['ill_1'];
      $ill1 = hexdec(hash('sha512',"$i1"))/10e+150%60;
      $userarray[$ill1] =1;
      $i2 = $row['ill_2'];
      $ill2 = hexdec(hash('sha512',"$i2"))/10e+150%60;
      $userarray[$ill2] =1;
      $i3 = $row['ill_3'];
      $ill3 = hexdec(hash('sha512',"$i3"))/10e+150%60;
      $userarray[$ill3] =1;
      $i4 = $row['ill_4'];
      $ill4 = hexdec(hash('sha512',"$i4"))/10e+150%60;
      $userarray[$ill4] =1;
      $s = implode("",$userarray);
         
      $sql5 = "UPDATE ewhaPlaneTbl SET BF = '".$s."' WHERE ID = '".$row['ID']."'";
      $ret5 = mysqli_query($con,$sql5);
      }
      
   }
   
   mysqli_close($con);
?>