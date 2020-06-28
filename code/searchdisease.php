<HTML>
<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
   </head>
   <head>
   <meta charset="utf-8" />
   <title>탑승자의 질병검색</title>
   </head>
   <BODY>
   <div class = "jumbotron text-center">
   <h1> 탑승자의 질병 검색 </h1>
   <p>질병별 탑승자의 목록을 제공합니다. 해당 질병을 검색하세요.</p>
   </div>
      
       
      
  
      <div class = "container">
      <table class= "table">
         <thead>
            <tr>
            <th>검색어</th>
            <th>병명(예시)</th>
            </tr>
         </thead>
         <tbody>
         <tr>
            <td>감염</td>
            <td>감염성 질환(ex.결핵,성병)</td>
         </tr>
         <tr>
            <td>영양</td>
            <td>영양 및 대사 질환(ex.당뇨)</td>
         </tr>
         <tr>
            <td>정신</td>
            <td>정신 및 행동 질환(ex.지체장애)</td>
         </tr>
         <tr>
            <td>신경</td>
            <td>신경계통 질환(ex.두통)</td>
         </tr>
         <tr>
            <td>청각</td>
            <td>청각 질환(ex.청각장애)</td>
         </tr>
         <tr>
            <td>순환</td>
            <td>순환계통 질환(ex.고혈압,심장병)</td>
         </tr>
         <tr>
            <td>호흡</td>
            <td>호흡계통 질환(ex.폐렴,천식)</td>
         </tr>
         <tr>
            <td>소화</td>
            <td>소화계통 질환(ex.장염,위염)</td>
         </tr>
         <tr>
            <td>골격</td>
            <td>근골격계 질환(ex.관절염)</td>
         </tr>
         </tbody>
         </table>
         </div>
         
         <FORM name="form1" method="POST" action="searchdisease_result.php">
         <table align="center" border="0" cellspacing="0" width="500">   
          <tr>
         <td width="300" colspan="1">
       <label for = "">질병 :</label>
        <INPUT type="text" name="disease" placeholder = "병명을 검색어로 검색">
       <INPUT type="submit" class="btn btn-success"  value="검색">
      <td rowspan="3" align="center" width="200" > 
         </td>
    
         
        
         </tr>

                 
         </table>
      </FORM>
   </BODY>
</HTML>