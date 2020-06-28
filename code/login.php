<HTML>
<head>
    <title>회원 로그인 결과</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
   <meta charset="utf-8" />
</head>

<BODY>
      <div class="jumbotron text-center">
      <h2>회원님의 정보입니다.</h2>
      </div>
      <div class="container">
      <table class="table">
      <thead>
         <tr>
         <th>이름</th>
         <th>ID</th>
         <th>전화번호</th>
       <th>생일</th>
       <th>질병</th>
         </tr>
      </thead>
         <tbody>

<?php
   $con=mysqli_connect("localhost", "root", "", "ewhaPlaneDB") 
   or die("MySQL 접속 실패 !!");
   $sql3="SELECT ID FROM ewhaPlaneTbl";
   $ret3=mysqli_query($con,$sql3);
   $count=0;
   while($row2=mysqli_fetch_array($ret3))
   {
	   if($row2['ID']==$_POST["ID"])
	   {$count+=1;}
   }
   if($count==0){
	   echo "<script>alert('존재하지 않는 회원입니다. 회원가입을 진행해주세요.');
	   location.replace('./id.php');</script>";}
	else{
	   $sql="SELECT AES_DECRYPT(UNHEX(name), 'NaMe!@?') as name1, ID, AES_DECRYPT(UNHEX(phNum), 'PhNb!@#*') as phNum1, 
	   AES_DECRYPT(UNHEX(birthyear), 'year!') as birthyear, birthday, sex, password, LOGIN_FAIL_COUNT, ppNum, 
	   AES_DECRYPT(UNHEX(ill_1), 'disease!') as ill_1, AES_DECRYPT(UNHEX(ill_2), 'disease!') as ill_2, 
	   AES_DECRYPT(UNHEX(ill_3), 'disease!') as ill_3, AES_DECRYPT(UNHEX(ill_4), 'disease!') as ill_4
	   FROM ewhaPlaneTbl WHERE ID='".$_POST["ID"]."'";
	   
	   $ret= mysqli_query($con, $sql);
	   $password=$_POST["PASSWORD"];
	   $PWD = hash('sha512', $password);
	   
	   if($ret) {
		  while($row=mysqli_fetch_array($ret)){
			 if($row['LOGIN_FAIL_COUNT']==3){
				 echo "비밀번호 3회 이상 오류로 차단되었습니다.","<br>";
				 echo "차단을 해제하려면 고객센터(010-8540-8154)로 문의해주세요.";}
			 else{
				 if($row['ID']=='manager'&&$PWD==$row['password']){
					header('Location: http://localhost/manager.php');
				 }
				 else{
					if($PWD==$row['password']){
					    $new_LF=0;
						$sql4="UPDATE ewhaPlaneTbl SET LOGIN_FAIL_COUNT='".$new_LF."' WHERE ID='".$row['ID']."'";
						$ret4= mysqli_query($con, $sql4);
						echo "<script>alert('로그인 되었습니다.');</script>";
						echo "<tr><td>";
						echo $row['name1'];
						echo "</td><td>";
						echo $row['ID'];
						echo "</td><td>"; 
						echo $row['phNum1'];
						echo "</td><td>";
						echo $row['birthyear'].".".$row['birthday'];
						echo "</td><td>";
						echo $row['ill_1'], "  ", $row['ill_2'], "  ", $row['ill_3'], "  ", $row['ill_4'];
						echo "</td></tr>";
					} else{
					   echo  "<script>alert('로그인에 실패하였습니다');history.back();</script>";
					   $new_LF=$row['LOGIN_FAIL_COUNT']+1;
					   $sql2="UPDATE ewhaPlaneTbl SET LOGIN_FAIL_COUNT='".$new_LF."' WHERE ID='".$row['ID']."'";
					   $ret2= mysqli_query($con, $sql2);
					}
				 }
			  }
		  }
	   } else{
		  echo "Result Failed";
	   }
	   
	   mysqli_close($con);
	}
   
?>
</tbody>
         </table>
         </div>
   </BODY>
</HTML>