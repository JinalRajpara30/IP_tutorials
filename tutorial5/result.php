<?php
//echo "<pre>";
//print_r($_POST);
//echo "<pre>";
echo ($_POST['month'])?$_POST['month']:0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
     <div class="row">
         <select name="month" id="" require>
             <option <?= ($m=="January")?"selected":"">January</option>
             <option <?= ($m=="Fabruary")?"selected":"">Fabruary</option>
             <option <?= ($m=="March")?"selected":"">March</option>
             <option <?= ($m=="April")?"selected":"">April</option>
             <option <?= ($m=="May")?"selected":"">May</option>
             <option <?= ($m=="June")?"selected":"">June</option>
             <option <?= ($m=="July")?"selected":"">July</option>
             <option <?= ($m=="August")?"selected":"">August</option>
             <option <?= ($m=="September")?"selected":"">September</option>
             <option <?= ($m=="October")?"selected":"">October</option>
             <option <?= ($m=="November")?"selected":"">November</option>
             <option <?= ($m=="December")?"selected":"">December</option>
         </select>
     </div>
    </div>
</body>
</html>
