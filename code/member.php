<?php

   $con=mysqli_connect("localhost", "root", "", "ewhaPlaneDB")
   or die("MySQL 접속 실패 !!");
   
   $userid=$_POST['userid'];
   $userpw=hash('sha512',$_POST['userpw']);
   $username=$_POST['username'];
   $userphone=$_POST['userphone'];
   $userbtd_1=$_POST['userbtd1'];
   $userbtd_2=$_POST['userbtd2'].$_POST['userbtd3'];
   $usersex=$_POST['usersex'];
   $userpassport=hash('sha512', $_POST['userpassport']);
   $userill1=$_POST['case1'];
   $userill2=$_POST['case2'];
   $userill3=$_POST['case3'];
   $userill4=$_POST['case4'];
   
 
  
   
   $sql="INSERT INTO ewhaPlaneTbl(name,ID,phNum,birthyear,birthday,sex,password,ppNum,ill_1,ill_2,ill_3,ill_4)
   VALUES(HEX(AES_ENCRYPT('$username', 'NaMe!@?')),'".$userid."',HEX(AES_ENCRYPT('$userphone', 'PhNb!@#*')), HEX(AES_ENCRYPT('$userbtd_1', 'year!')),'".$userbtd_2."','".$usersex."','".$userpw."',
   '".$userpassport."',HEX(AES_ENCRYPT('$userill1', 'disease!')),HEX(AES_ENCRYPT('$userill2', 'disease!')),HEX(AES_ENCRYPT('$userill3', 'disease!')),HEX(AES_ENCRYPT('$userill4', 'disease!')))";
   $ret=mysqli_query($con,$sql);
   
   $sql2="SELECT AES_DECRYPT(UNHEX(birthyear), 'year!') as birthyear_d,name,ID,phNum,birthyear,birthday,sex,password,ppNum,ill_1,ill_2,ill_3,ill_4 from ewhaPlaneDB.ewhaPlaneTbl";
   $ret2=mysqli_query($con, $sql2);
   $now_year=(string)(date("Y",time()));
   
   if($ret2){
      while($row=mysqli_fetch_array($ret2))
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
   AES_DECRYPT(UNHEX(ill_1), 'disease!') as ill_1, AES_DECRYPT(UNHEX(ill_2), 'disease!') as ill_2, AES_DECRYPT(UNHEX(ill_3), 'disease!') as ill_3, AES_DECRYPT(UNHEX(ill_4), 'disease!') as ill_4, BF
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
   
   
   
   
   

   if(!$ret){
   echo "<script>alert('회원가입에 실패하였습니다.');history.back();</script>";
   }
   
   else
   {
   echo "<script>alert('회원가입 되었습니다. 로그인 화면으로 이동합니다.');location.replace('./id.php');</script>";
   }

   mysqli_close($con);
?>