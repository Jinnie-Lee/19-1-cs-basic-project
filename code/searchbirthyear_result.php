<HTML>
   <head>
    <title>나이대 조회 결과</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
   <meta charset="utf-8" />
   </head>
   <BODY>
      <div class="jumbotron text-center">
      <h2>선택하신 나이대의 회원목록입니다.</h2>
      </div>
      <div class="container">
      <table class="table">
      <thead>
         <tr>
         <th>이름</th>
         <th>ID</th>
         <th>생일</th>
         </tr>
      </thead>
         <tbody>
         <?php
            $con=mysqli_connect("localhost", "root", "", "ewhaPlaneDB") or die("MySQL 접속 실패 !!");
            $old=$_POST['old'];
            $bucket=0;
            if($old=="0"){$bucket=2;}
            else if($old=="1"){$bucket=95;}
            else if($old=="2"){$bucket=47;}
            else if($old=="3"){$bucket=12;}
            else if($old=="4"){$bucket=61;}
            else if($old=="5"){$bucket=23;}
            else if($old=="6"){$bucket=34;}
               $sql="SELECT AES_DECRYPT(UNHEX(name), 'NaMe!@?') as name1, ID, AES_DECRYPT(UNHEX(phNum), 'PhNb!@#*') as phNum1, 
                  AES_DECRYPT(UNHEX(birthyear), 'year!') as birthyear, birthday, sex, password, ppNum, 
                  AES_DECRYPT(UNHEX(ill_1), 'disease!') as ill_1,
                  AES_DECRYPT(UNHEX(ill_2), 'disease!') as ill_2, 
                  AES_DECRYPT(UNHEX(ill_3), 'disease!') as ill_3, 
                  AES_DECRYPT(UNHEX(ill_4), 'disease!') as ill_4
                  FROM ewhaPlaneTbl WHERE bucket_Year='$bucket'";
            $ret=mysqli_query($con,$sql);
            if($ret){
               while($row=mysqli_fetch_array($ret)){
                  echo "<tr><td>";
                  echo $row['name1'];
                  echo "</td><td>"; 
                  echo $row['ID']; 
                  echo "</td><td>";
                  echo $row['birthday'];
                  echo "</td></tr>";
               }
            }
            else{
               echo "Result Failed.";
               mysqli_error($con);}
   
            mysqli_close($con);
         ?>
         </tbody>
         </table>
         </div>
   </BODY>
</HTML>