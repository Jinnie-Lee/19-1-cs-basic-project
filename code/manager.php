

<HTML>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
   </head>
   <head>
   <meta charset="utf-8" />
   <title>manager 검색</title>
   </head>
   <BODY>
   <div class = "jumbotron text-center">
   <h1>Manager님 접속을 환영합니다.</h1>
   <p>조회할 것을 선택하세요.</p>
   </div>
      <div class = "container">
      <table class= "table">
         <thead>
            <tr>
            <th></th>
            </tr>
         </thead>
         <tbody>
         <FORM name="form1" method="POST" action="searchdisease.php">
         <tr>
         <td>
         질병: <INPUT type="submit" class="btn btn-success" value="바로가기">
         </td>
         </tr>         
      </FORM>
      <FORM name="form2" method="POST" action="searchbirthyear.php">
         <tr>
         <td>
         생일: <INPUT type="submit" class="btn btn-success" value="바로가기">
         </td>
         </tr>
         </FORM>
         </tbody>
         </table>
         </div>
   </BODY>
</HTML>