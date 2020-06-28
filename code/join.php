<html>
   <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
   </head>
   <BODY>
      <div class="jumbotron text-center">
         <h1>Welcome to ewhaPlane</h1>
         <p>회원가입을 환영합니다.</p>
      </div>
     
      <div class="container">
         <table class="table">
       <thead>
         <tr>
            <th></th>
            <th></th>
            </tr>
      </thead>
      <tbody>
         <form method="post" action="member.php">
         <tr>
         <td>아이디</td>
         <td><input type="text" size="35" name="userid" placeholder="아이디"></td>
         </tr>
         <tr>
         <td>비밀번호</td>
         <td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
         </tr>
         <tr>
         <td>이름</td>
         <td><input type="text" size="35" name="username" placeholder="이름"></td>
         </tr>
         <tr>
         <td>연락처</td>
           <td><input type="text" size="35" name="userphone" placeholder="연락처"></td>
             </tr>
             <tr>
             <td>생년월일</td>
             <td><input type="text" size="10" name="userbtd1" placeholder="생년월일" class=input> 년
             <select name=userbtd2 class="input">
                    <option value=01>1</option>
               <option value=02>2</option>
                   <option value=03>3</option>
               <option value=04>4</option>
               <option value=05>5</option>
               <option value=06>6</option>
               <option value=07>7</option>
               <option value=08>8</option>
               <option value=09>9</option>
               <option value=10>10</option>
               <option value=11>11</option>
               <option value=12>12</option>
             </select> 월
               <select name=userbtd3 class="input">
               <option value=01>1</option>
               <option value=02>2</option>
               <option value=03>3</option>
               <option value=04>4</option>
               <option value=05>5</option>
               <option value=06>6</option>
               <option value=07>7</option>
               <option value=08>8</option>
               <option value=09>9</option>
               <option value=10>10</option>
               <option value=11>11</option>
               <option value=12>12</option>
               <option value=13>13</option>
               <option value=14>14</option>
               <option value=15>15</option>
               <option value=16>16</option>
               <option value=17>17</option>
               <option value=18>18</option>
               <option value=19>19</option>
               <option value=20>20</option>
               <option value=21>21</option>
               <option value=22>22</option>
               <option value=23>23</option>
               <option value=24>24</option>
               <option value=25>25</option>
               <option value=26>26</option>
               <option value=27>27</option>
               <option value=28>28</option>
               <option value=29>29</option>
               <option value=30>30</option>
               <option value=31>31</option>
             </select> 일
             </td>
             </tr>
             <tr>
             <td>성별</td>
           <td>남<input type="radio" name="usersex" value="남"> 여<input type="radio" name="usersex" value="여"></td>
            </tr>
             <tr>
             <td>여권번호</td>
             <td><input type="text" size="35" name="userpassport" placeholder="여권번호"></td>
             </tr>
             <tr>
             <td>질병 및 장애 여부</td>
             <td>
             감염성 질환(ex.결핵,성병)-감염 <br>
             영양 및 대사 질환(ex.당뇨)-영양<br>
             정신 및 행동 질환(ex.지체장애)-정신<br>
             신경계통 질환(ex.두통)-신경<br>
             시각 질환(ex.시각장애)-시각<br>
             청각 질환(ex.청각장애)-청각<br>
             순환계통 질환(ex.고혈압,심장병)-순환<br>
             호흡계통 질환(ex.폐렴,천식)-호흡<br>
             소화계통 질환(ex.장염,위염)-소화<br>
             근골격계 질환(ex.관절염)-골격<br></td></tr>
             <tr>
             <td></td>
            <td>
            <input type="text" size="35" name="case1" placeholder="병명"><br>
            <input type="text" size="35" name="case2" placeholder="병명"><br>
            <input type="text" size="35" name="case3" placeholder="병명"><br>
            <input type="text" size="35" name="case4" placeholder="병명"></td>
             </tr>
             </table>
            <input type="submit" class="btn btn-success" value="가입하기" />
            </div>
             </tbody>
          </body>
</html>