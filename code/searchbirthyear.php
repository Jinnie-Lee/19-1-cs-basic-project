<HTML>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
   </head>
   <head>
   <meta charset="utf-8" />
   <title>탑승자의 생일 검색</title>
   </head>
   <BODY>
   <div class = "jumbotron text-center">
   <h1>탑승자의 생일 검색</h1>
   <p>검색하실 나이대를 선택하세요.</p>
   </div>
      <div class = "container">
      <table class= "table">
         <thead>
            <tr>
            <th>나이대</th>
            </tr>
         </thead>
         <tbody>
         <FORM name="form1" method="POST" action="searchbirthyear_result.php">
         <tr><td>0 ~ 10세 이하<input type="radio" name="old" value="0"></td></tr>
         <tr><td>10 ~ 20세 이하<input type="radio" name="old" value="1"></td></tr>
         <tr><td>20 ~ 30세 이하<input type="radio" name="old" value="2"></td></tr>
         <tr><td>30 ~ 40세 이하<input type="radio" name="old" value="3"></td></tr>
         <tr><td>40 ~ 50세 이하<input type="radio" name="old" value="4"></td></tr>
         <tr><td>50 ~ 60세 이하<input type="radio" name="old" value="5"></td></tr>
         <tr><td>60세 이상<input type="radio" name="old" value="6"></td></tr>
         <tr><td><INPUT type="submit" class="btn btn-success" value="조회"></td></tr>
         </FORM>
         </tbody>
         </table>
         </div>
   </BODY>
</HTML>