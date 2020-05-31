<?php

$testId = $_POST['testId'];
$testId1 = $_POST['testId1'];
$testId2 = $_POST['testId2'];


$mysqli = new mysqli('localhost','root','root','test_db');

if (isset($_POST['test_submit'])){
   $result =  $mysqli->query("INSERT INTO `test_tb` (`id_t`,`test`,`test_1`,`test_2`) VALUES ( NULL,'$testId','$testId1','$testId2')");
    
   
}



$pass = md5($testId1."rffdew3");


$echo= 
"
<div class='header' >
<div class='row' >
				<!-- Keep within 1140px width -->
				<img src='resources/img/logo-white.png'  class='logo'>
		
				<ul class='main-nav js--main-nav' >
					<li><a href='?use=about' style='color:#e67e22;'>О НАС</a></li>
					<li><a href='?use=form'style='color:#e67e22;'>ОФОРМИТЬ ЗАЯВКУ</a></li>
					<li><a href='?use=tracking'style='color:#e67e22;'>ОТСЛЕЖИВАНИЕ ДОСТАВКИ</a></li>
					<li><a href='?use=branch'style='color:#e67e22;'>ФИЛИАЛЫ</a></li>
                </ul>
                </div>
</div>
<div class='row' >
			<h2 >Оформите заявку</h2>	
			<div>
<section class='request'>

<div>
<form method='post'  >
<div class='row' >
   <p>VARCHAR</p>
    <input type='text'  name='testId' size='80'><br>
    <p>VARCHAR</p>
    <input type='text'  name='testId1' size='80'><br>
    <p>INT</p> 
    <input type='text'  name='testId2' size='80'><br> 
    <p>Сабмит</p>
    <input type='submit' name='test_submit' size='80'><br>
</form>
</div>

</section>
</div>
</div>




";
?>