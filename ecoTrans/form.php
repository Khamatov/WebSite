<?php




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
			<h2 >Оформите заявку </h2>	
			<div>
<section class='request'>
<div class='forma2' id='form_id'  >
<form method='post' >
<div class='row' >
<p style='margin:30px 0'>ИНФОРМАЦИЯ О ВАС:</p>
<div class='name'>
<div >
<p>Ваше имя</p>
    <input type='text' name='Name' size='150' ><br></div>
    <div> <p>Ваша Фамилия</p>
    <input type='text' name='Surname' size='150' ><br>
   </div> </div>
    <div class='name'> <div><p>E-mail</p>
    <input type='text' name='Email' size='80'><br></div>
    <div><p>Ваш номер </p>
    <input type='text' name='Phone' size='80'><br></div>
    </div>
    <p style='margin:30px 0'>ИНФОРМАЦИЯ О ПЕРЕВОЗКЕ:</p>
<div class='gruz'>
<p><select style='color:white;border-radius: 5px;'  name='city1' >
    <option selected='selected'>Откуда</option>
    <option value='Москва'>Москва</option>
    <option value='Санкт-Петербург'>Санкт-Петербург</option>
    <option value='Казань'>Казань</option>
    <option value='Чебоксары'>Чебоксары</option>
    <option value='Владивосток'>Владивосток</option>
    <option value='Нижний Новгород'>Нижний Новгород</option>
    <option value='Екатеринбург'>Екатеринбург</option>
    <option value='Новосибирск'>Новосибирск</option>
    <option value='Уфа'>Уфа</option>
    <option value='Ульяновск'>Ульяновск</option>
   </select></p>
   <p><select style='color:white;border-radius: 5px;' name='city2'>
    <option selected='selected'>Куда</option>
    <option value='Москва'>Москва</option>
    <option value='Санкт-Петербург'>Санкт-Петербург</option>
    <option value='Казань'>Казань</option>
    <option value='Чебоксары'>Чебоксары</option>
    <option value='Владивосток'>Владивосток</option>
    <option value='Нижний Новгород'>Нижний Новгород</option>
    <option value='Екатеринбург'>Екатеринбург</option>
    <option value='Новосибирск'>Новосибирск</option>
    <option value='Уфа'>Уфа</option>
    <option value='Ульяновск'>Ульяновск</option>
   </select></p>
   </div>
   <p style='margin:30px 0'>ИНФОРМАЦИЯ О ГРУЗЕ:</p>
	<div class='gruz'>
	<div><p>Высота:</p>
	<input type='text' name='height' size='10'><br></div>
	<div><p>Ширина:</p>
	<input type='text' name='width'  size='10'><br></div>
	<div><p>Длина:</p>
    <input type='text'  name='long' size='10'><br></div>
    <div><p>Вес:</p>
	<input type='text' name='mass' size='80'><br></div>
	</div>
	<br>
	<input type='submit' name='submit' size='80'  value='ОТПРАВИТЬ' >
	</div>
</form>



</section>
</div>
</div>

";


if (isset($_POST['submit'])){
    $height=$_POST['height'];
    $width=$_POST['width'];
    $long=$_POST['long'];
   
    $city1=$_POST['city1'];
    $city2=$_POST['city2'];
    $name=$_POST['Name'];
    $surname=$_POST['Surname'];
    $phone=$_POST['Phone'];
    $email=$_POST['Email'];
	if ((($_POST['city1'] == 'Москва')&&($_POST['city2'] == 'Казань'))||(($_POST['city2'] == 'Москва')&&($_POST['city1'] == 'Казань'))) {
		$dist=809;
	}elseif  ((($_POST['city1'] == 'Москва')&&($_POST['city2'] == 'Санкт-Петербург'))||(($_POST['city2'] == 'Москва')&&($_POST['city1'] == 'Санкт-Петербург'))) {
		$dist=705;
	}elseif  ((($_POST['city1'] == 'Москва')&&($_POST['city2'] == 'Чебоксары'))||(($_POST['city2'] == 'Москва')&&($_POST['city1'] == 'Чебоксары'))) {
		$dist=670;
	}elseif  ((($_POST['city1'] == 'Москва')&&($_POST['city2'] == 'Владивосток'))||(($_POST['city2'] == 'Москва')&&($_POST['city1'] == 'Владивосток'))) {
		$dist=8997;
	}elseif  ((($_POST['city1'] == 'Москва')&&($_POST['city2'] == 'Нижний Новгород'))||(($_POST['city2'] == 'Москва')&&($_POST['city1'] == 'Нижний Новгород'))) {
		$dist=422;
	}elseif  ((($_POST['city1'] == 'Москва')&&($_POST['city2'] == 'Екатеринбург'))||(($_POST['city2'] == 'Москва')&&($_POST['city1'] == 'Екатеринбург'))) {
		$dist=1785;
	}elseif  ((($_POST['city1'] == 'Москва')&&($_POST['city2'] == 'Новосибирск'))||(($_POST['city2'] == 'Москва')&&($_POST['city1'] == 'Новосибирск'))) {
		$dist=3356;
	}elseif  ((($_POST['city1'] == 'Москва')&&($_POST['city2'] == 'Уфа'))||(($_POST['city2'] == 'Москва')&&($_POST['city1'] == 'Уфа'))) {
		$dist=1352;
	}elseif  ((($_POST['city1'] == 'Москва')&&($_POST['city2'] == 'Ульяновск'))||(($_POST['city2'] == 'Москва')&&($_POST['city1'] == 'Ульяновск'))) {
		$dist=877;
	}elseif  ((($_POST['city1'] == 'Санкт-Петербург')&&($_POST['city2'] == 'Казань'))||(($_POST['city2'] == 'Санкт-Петербург')&&($_POST['city1'] == 'Казань'))) {
		$dist=1522;
	}elseif  ((($_POST['city1'] == 'Санкт-Петербург')&&($_POST['city2'] == 'Чебоксары'))||(($_POST['city2'] == 'Санкт-Петербург')&&($_POST['city1'] == 'Чебоксары'))) {
		$dist=1370;
	}elseif  ((($_POST['city1'] == 'Санкт-Петербург')&&($_POST['city2'] == 'Владивосток'))||(($_POST['city2'] == 'Санкт-Петербург')&&($_POST['city1'] == 'Владивосток'))) {
		$dist=9697;
	}elseif  ((($_POST['city1'] == 'Санкт-Петербург')&&($_POST['city2'] == 'Нижний Новгород'))||(($_POST['city2'] == 'Санкт-Петербург')&&($_POST['city1'] == 'Нижний Новгород'))) {
		$dist=1122;
	}elseif  ((($_POST['city1'] == 'Санкт-Петербург')&&($_POST['city2'] == 'Екатеринбург'))||(($_POST['city2'] == 'Санкт-Петербург')&&($_POST['city1'] == 'Екатеринбург'))) {
		$dist=2222;
	}elseif  ((($_POST['city1'] == 'Санкт-Петербург')&&($_POST['city2'] == 'Новосибирск'))||(($_POST['city2'] == 'Санкт-Петербург')&&($_POST['city1'] == 'Новосибирск'))) {
		$dist=4057;
	}elseif  ((($_POST['city1'] == 'Санкт-Петербург')&&($_POST['city2'] == 'Уфа'))||(($_POST['city2'] == 'Санкт-Петербург')&&($_POST['city1'] == 'Уфа'))) {
		$dist=2052;
	}elseif ((($_POST['city1'] == 'Санкт-Петербург')&&($_POST['city2'] == 'Ульяновск'))||(($_POST['city2'] == 'Санкт-Петербург')&&($_POST['city1'] == 'Ульяновск'))) {
		$dist=1587;
	}elseif  ((($_POST['city1'] == 'Казань')&&($_POST['city2'] == 'Чебоксары'))||(($_POST['city2'] == 'Казань')&&($_POST['city1'] == 'Чебоксары'))) {
		$dist=156;
	}elseif  ((($_POST['city1'] == 'Казань')&&($_POST['city2'] == 'Владивосток'))||(($_POST['city2'] == 'Казань')&&($_POST['city1'] == 'Владивосток'))) {
		$dist=8179;
	}elseif  ((($_POST['city1'] == 'Казань')&&($_POST['city2'] == 'Нижний Новгород'))||(($_POST['city2'] == 'Казань')&&($_POST['city1'] == 'Нижний Новгород'))) {
		$dist=393;
	}elseif  ((($_POST['city1'] == 'Казань')&&($_POST['city2'] == 'Екатеринбург'))||(($_POST['city2'] == 'Казань')&&($_POST['city1'] == 'Екатеринбург'))) {
		$dist=967;
	}elseif  ((($_POST['city1'] == 'Казань')&&($_POST['city2'] == 'Новосибирск'))||(($_POST['city2'] == 'Казань')&&($_POST['city1'] == 'Новосибирск'))) {
		$dist=2538;
	}elseif  ((($_POST['city1'] == 'Казань')&&($_POST['city2'] == 'Уфа'))||(($_POST['city2'] == 'Казань')&&($_POST['city1'] == 'Уфа'))) {
		$dist=534;
	}elseif  ((($_POST['city1'] == 'Казань')&&($_POST['city2'] == 'Ульяновск'))||(($_POST['city2'] == 'Казань')&&($_POST['city1'] == 'Ульяновск'))) {
		$dist=224;
	}elseif  ((($_POST['city1'] == 'Чебоксары')&&($_POST['city2'] == 'Владивосток'))||(($_POST['city2'] == 'Чебоксары')&&($_POST['city1'] == 'Владивосток'))) {
		$dist=8352;
	}elseif  ((($_POST['city1'] == 'Чебоксары')&&($_POST['city2'] == 'Нижний Новгород'))||(($_POST['city2'] == 'Чебоксары')&&($_POST['city1'] == 'Нижний Новгород'))) {
		$dist=242;
	}elseif  ((($_POST['city1'] == 'Чебоксары')&&($_POST['city2'] == 'Екатеринбург'))||(($_POST['city2'] == 'Чебоксары')&&($_POST['city1'] == 'Екатеринбург'))) {
		$dist=1086;
	}elseif  ((($_POST['city1'] == 'Чебоксары')&&($_POST['city2'] == 'Новосибирск'))||(($_POST['city2'] == 'Чебоксары')&&($_POST['city1'] == 'Новосибирск'))) {
		$dist=2692;
	}elseif  ((($_POST['city1'] == 'Чебоксары')&&($_POST['city2'] == 'Уфа'))||(($_POST['city2'] == 'Чебоксары')&&($_POST['city1'] == 'Уфа'))) {
		$dist=687;
	}elseif  ((($_POST['city1'] == 'Чебоксары')&&($_POST['city2'] == 'Ульяновск'))||(($_POST['city2'] == 'Чебоксары')&&($_POST['city1'] == 'Ульяновск'))) {
		$dist=236;
	}
	elseif  ((($_POST['city1'] == 'Владивосток')&&($_POST['city2'] == 'Нижний Новгород'))||(($_POST['city2'] == 'Владивосток')&&($_POST['city1'] == 'Нижний Новгород'))) {
		$dist=8588;
	}elseif  ((($_POST['city1'] == 'Владивосток')&&($_POST['city2'] == 'Екатеринбург'))||(($_POST['city2'] == 'Владивосток')&&($_POST['city1'] == 'Екатеринбург'))) {
		$dist=7252;
	}elseif  ((($_POST['city1'] == 'Владивосток')&&($_POST['city2'] == 'Новосибирск'))||(($_POST['city2'] == 'Владивосток')&&($_POST['city1'] == 'Новосибирск'))) {
		$dist=5670;
	}elseif  ((($_POST['city1'] == 'Владивосток')&&($_POST['city2'] == 'Уфа'))||(($_POST['city2'] == 'Владивосток')&&($_POST['city1'] == 'Уфа'))) {
		$dist=7654;
	}elseif  ((($_POST['city1'] == 'Владивосток')&&($_POST['city2'] == 'Ульяновск'))||(($_POST['city2'] == 'Владивосток')&&($_POST['city1'] == 'Ульяновск'))) {
		$dist=8229;
	}elseif  ((($_POST['city1'] == 'Нижний Новгород')&&($_POST['city2'] == 'Екатеринбург'))||(($_POST['city2'] == 'Нижний Новгород')&&($_POST['city1'] == 'Екатеринбург'))) {
		$dist=1357;
	}elseif  ((($_POST['city1'] == 'Нижний Новгород')&&($_POST['city2'] == 'Новосибирск'))||(($_POST['city2'] == 'Нижний Новгород')&&($_POST['city1'] == 'Новосибирск'))) {
		$dist=2928;
	}elseif  ((($_POST['city1'] == 'Нижний Новгород')&&($_POST['city2'] == 'Уфа'))||(($_POST['city2'] == 'Нижний Новгород')&&($_POST['city1'] == 'Уфа'))) {
		$dist=923;
	}elseif  ((($_POST['city1'] == 'Нижний Новгород')&&($_POST['city2'] == 'Ульяновск'))||(($_POST['city2'] == 'Нижний Новгород')&&($_POST['city1'] == 'Ульяновск'))) {
		$dist=445;
	}elseif  ((($_POST['city1'] == 'Екатеринбург')&&($_POST['city2'] == 'Новосибирск'))||(($_POST['city2'] == 'Екатеринбург')&&($_POST['city1'] == 'Новосибирск'))) {
		$dist=1592;
	}elseif  ((($_POST['city1'] == 'Екатеринбург')&&($_POST['city2'] == 'Уфа'))||(($_POST['city2'] == 'Екатеринбург')&&($_POST['city1'] == 'Уфа'))) {
		$dist=513;
	}elseif  ((($_POST['city1'] == 'Екатеринбург')&&($_POST['city2'] == 'Ульяновск'))||(($_POST['city2'] == 'Екатеринбург')&&($_POST['city1'] == 'Ульяновск'))) {
		$dist=1088;
	}elseif  ((($_POST['city1'] == 'Новосибирск')&&($_POST['city2'] == 'Уфа'))||(($_POST['city2'] == 'Новосибирск')&&($_POST['city1'] == 'Уфа'))) {
		$dist=1995;
	}elseif  ((($_POST['city1'] == 'Новосибирск')&&($_POST['city2'] == 'Ульяновск'))||(($_POST['city2'] == 'Новосибирск')&&($_POST['city1'] == 'Ульяновск'))) {
		$dist=2569;
	}elseif  ((($_POST['city1'] == 'Уфа')&&($_POST['city2'] == 'Ульяновск'))||(($_POST['city2'] == 'Уфа')&&($_POST['city1'] == 'Ульяновск'))) {
		$dist=591;
	}elseif  ($_POST['city1'] == $_POST['city2']) {
		$dist=5;
	}
    $volume =  (int)$height * (int)$width * (int)$long;
	if ($dist>10 && $dist<10000)
	$sum=$dist*2;
	$sum=300;
	
	$mass=$_POST['mass'];
     $sum=$volume*2*$sum;
     $mass-=120;
     if($mass>0){
      for($i=1;$i<=$mass;$i++){
          $sum+=7;
      }
    }
    $mass=$_POST['mass'];

	
    $result = $mysqli->query("INSERT INTO `request` (`id_request`,`start_point_request`,`destination_request`,`long_request`,`weight_request`,`height_request`,`mass_request`,`client_name_request`,`client_surname_request`,`client_email_request`,`client_phone_request`,`date`) 
                                                  VALUES ( NULL,'$city1','$city2','$long','$width','$height','$mass','$name','$surname','$email','$phone', NOW())");
if($result){
    $echo=  "<div class='header' >
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
				<h2 >Оформите заявку </h2>	
				<div>
	<section class='request'>
	<div class='forma2' >
	<p>Ваша стоимость составит: $sum.
	</p>
	<p>Ваш id-$mysqli->insert_id.
	</p>
	<p> С Вами свяжется наш оператор.
	</p>
	</div>
	</section>
</div>
</div> 
	";
}else{
	echo $echo=  "<script> alert('Заполните все поля')</script>";
}
}

?>