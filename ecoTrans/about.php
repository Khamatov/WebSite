
<?php



if (isset($_POST['submit'])){
    $sum=0;
    $height=$_POST['height'];
    $width=$_POST['width'];
	$long=$_POST['long'];
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

	


	
}





$echo=	"
<header>
<nav>
			<div class='row'>
				<!-- Keep within 1140px width -->
				<img src='resources/img/logo-white.svg'  class='logo'>
		
				<ul class='main-nav js--main-nav'>
					<li><a href='?use=about'>О НАС</a></li>
					<li><a href='?use=form'>ОФОРМИТЬ ЗАЯВКУ</a></li>
					<li><a href='?use=tracking'>ОТСЛЕЖИВАНИЕ ДОСТАВКИ</a></li>
					<li><a href='?use=branch'>ФИЛИАЛЫ</a></li>
					
				</ul>
				<a class='mobile-nav-icon js--nav-icon'><i class='ion-navicon-round'></i></a> <!-- No href -->
			</div>
		</nav>
		<div class='hero-text'>
			<h1> Транспортная компания<br>'ЭкоТранс' </h1>
			<a class='button' href='#'>Заказать сейчас</a>
		</div>
		<div class='calculate'>

<div class='forma' id='form_id'  action='?use=about'>
<form method='post' name='my' >
<div class='row' >
<h3 style='color:white;font-size:18px;text-align:center'> Рассчитайте стоимость маршрута </h3>
<div class='gruz'>
<div><p><select style='border-radius: 5px; background-color:white;height:40px'  name='city1' >
<option selected='selected'>Откуда</option>
<option value='Москва'>Москва</option>
<option  value='Санкт-Петербург'>Санкт-Петербург</option>
<option value='Казань'>Казань</option>
<option value='Чебоксары'>Чебоксары</option>
<option value='Владивосток'>Владивосток</option>
<option value='Нижний Новгород'>Нижний Новгород</option>
<option value='Екатеринбург'>Екатеринбург</option>
<option value='Новосибирск'>Новосибирск</option>
<option value='Уфа'>Уфа</option>
<option value='Ульяновск'>Ульяновск</option>
</select></p></div>
<div><p><select style='border-radius: 5px;background-color:white;height:40px' name='city2'>
<option selected='selected'>Куда</option>
<option value='Москва'>Москва</option>
<option  value='Санкт-Петербург'>Санкт-Петербург</option>
<option value='Казань'>Казань</option>
<option value='Чебоксары'>Чебоксары</option>
<option value='Владивосток'>Владивосток</option>
<option value='Нижний Новгород'>Нижний Новгород</option>
<option value='Екатеринбург'>Екатеринбург</option>
<option value='Новосибирск'>Новосибирск</option>
<option value='Уфа'>Уфа</option>
<option value='Ульяновск'>Ульяновск</option>
</select></p></div></div>
	<div class='gruz'>
	<div><p>Высота:</p>
	<input type='text' name='height' size='10'><br></div>
	<div><p>Ширина:</p>
	<input type='text' name='width'  size='10'><br></div>
	<div><p>Длина:</p>
	<input type='text'  name='long' size='10'><br></div>
	<div><p>Вес:</p>
	<input type='text' name='mass' size='80'></div>
	</div>
	
	<input type='submit' name='submit' size='80' class='confirmation' value='РАССЧИТАТЬ' >
	</div>
</form>

<div class='summa'>

<p>$sum руб.</p>

</div>


<script>
 
</script>
</div>



		</header>




<!-- Cities section-->

	<section  class='cities' id='cities'>
		<div class='row'>
			<h2>Мы работаем в 10 крупных городах России</h2>
		</div>
		
		<div class='row1'>
			<div class='cityBox'>
				<img src='resources/img/spb.jpg'>
				<h3>Санкт-Петербург</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/vladvstk.jpg'>
				<h3>Владивосток</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/msk.jpg'>
				<h3>Москва</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/kzn.jpg'>
				<h3>Казань</h3>
				</div>
			</div>
	
		
		<div class='row1'>
			<div class='cityBox'>
				<img src='resources/img/ekb.jpg'>
				<h3>Екатеринбург</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/nN.jpg'>
				<h3>Нижний новгород</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/sochi.jpg'>
				<h3>Сочи</h3>
				
			</div>
			<div class='cityBox'>
				<img src='resources/img/cheb.jpg'>
				<h3>Чебоксары</h3>
				</div>
			</div>
	
	</section>

	<!-- Testimonials section -->

	<section class='testimonials'>
		<div class='row'>
		
			<h2>Мы работаем с такими крупными брендами, как</h2>
			</div>
			
			
			<div class='sliderimg'>
<div class='sliderimg__wrapper'>
<div class='sliderimg__item'>
<div style='height: 250px;'><img src= 'resources/img/7.jpg'></div>
</div>
<div class='sliderimg__item'>
<div style='height: 250px;'><img src= 'resources/img/2.jpg'></div>
</div>
<div class='sliderimg__item'>
<div style='height: 250px;'><img src= 'resources/img/3.jpg'></div>
</div>
<div class='sliderimg__item'>
<div style='height: 250px;'><img src= 'resources/img/4.jpg'></div>
</div>
<div class='sliderimg__item'>
<div style='height: 250px;'><img src= 'resources/img/5.jpg'></div>
</div>
<div class='sliderimg__item'>
<div style='height: 250px;'><img src= 'resources/img/6.jpg'></div>
</div>
</div>

<a class='sliderimg__control sliderimg__control_left' href='#' role='button'></a>
<a class='sliderimg__control sliderimg__control_right sliderimg__control_show' href='#' role='button'></a>
</div>
		
	</section>

	<script src='resources/js/scripts.js'></script> <!-- Sticky nav -->


</body>

</html>";




?>