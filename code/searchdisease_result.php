<HTML>
   <head>
    <title>질병 조회 결과</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
   <meta charset="utf-8" />
   </head>
   <BODY>
   <div class="jumbotron text-center">
         <h2>입력하신 질병을 가진 회원목록입니다.</h2>
       </div>
       <div class="container">
      <table class="table">
      <thead>
         <tr>
         <th>이름</th>
         <th>ID</th>
         <th>전화번호</th>
         <th>질병</th>
         </tr>
      </thead>
         <tbody>
      <?php
         $con=mysqli_connect("localhost", "root", "", "ewhaPlaneDB") 
         or die("MySQL 접속 실패 !!");

         $sql="SELECT AES_DECRYPT(UNHEX(name), 'NaMe!@?') as name1, ID, AES_DECRYPT(UNHEX(phNum), 'PhNb!@#*') as phNum1, 
         AES_DECRYPT(UNHEX(birthyear), 'year!') as birthyear, birthday, sex, password, ppNum, 
         AES_DECRYPT(UNHEX(ill_1), 'disease!') as ill_1, AES_DECRYPT(UNHEX(ill_2), 'disease!') as ill_2, AES_DECRYPT(UNHEX(ill_3), 'disease!') as ill_3, AES_DECRYPT(UNHEX(ill_4), 'disease!') as ill_4, BF
         FROM ewhaPlaneTbl";
  
         $ret = mysqli_query($con,$sql);
         if($ret){
            while($row=mysqli_fetch_array($ret)){
            $bfstring =$row['BF'];
            $bfarray = str_split($bfstring,1);
      
            $value = $_POST["disease"];
            $disint = hexdec(hash('sha512',"$value"))/10e+150%60;
            if($bfarray[$disint]== 1)
               {   echo "<tr><td>";
                  echo $row['name1'];
                  echo "</td><td>"; 
                  echo $row['ID']; 
                  echo "</td><td>";
                  echo $row['phNum1'];
                  echo "</td><td>"; 
                  echo $row['ill_1']," ",$row['ill_2']," ",$row['ill_3']," ",$row['ill_4']; 
                  echo "</td></tr>";     }
            }
         }
   else
   {
      echo "질병검색실패!!"."<br>";
      echo "실패 원인 : ".mysqli_error($con);
   }
   mysqli_close($con);
?>
         </tbody>
         </table>
         </div>
   </BODY>
</HTML>