<HTML>
<head>
    <title>로그인</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
   </head>
   <BODY>
      <div class="jumbotron text-center">
         <h1>Welcome to ewhaPlane</h1>
         <p>아이디와 비밀번호를 입력해주시기 바랍니다.</p>
      </div>
      <div class="container">
      <FORM name="form1" method="POST" action="login.php">
         <table align="center" border="0" cellspacing="0" width="300">
         <tr>
         <td width="130" height="40" colspan="1">
         <INPUT type="text" name="ID" placeholder="아이디 입력">
         </td>
         <td rowspan="2" align="center" width="100" > 
         <INPUT type="submit" class="btn btn-success" value="로그인">
         </td>
         </tr>
         <tr>
         <td width="130" height="10" colspan="1"> 
         <INPUT type="PASSWORD" name="PASSWORD" placeholder="비밀번호 입력">
         </td>
         </tr>
         <tr>
         <td colspan="2" align="center" > 
         <a href="join.php" class="btn btn-link">회원가입</a>
         </td>
         </tr>
         </table>
      </FORM>

      </div>
   </BODY>
</HTML>