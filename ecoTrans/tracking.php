<?php



$echo = 
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
<section class='tracking'>

 <div class='forma2'>
   <p>
   Введите свой id
   </p>
  
   <form method='post' >
   <input type='text' name='idtracking'>
   <input style='height:42px' type='submit' name='submitidtracking'>
   </form>
 </div>

</section>
</div>
</div>




";




if (isset($_POST['submitidtracking'])){
  
   header("Location:?use=tracking&id=$_POST[idtracking]");

}

if(isset($_GET['id'])){
  
  $id=$_GET['id'];
  $result=$mysqli->query("SELECT * FROM tracking  WHERE id_user=$id");
  if (mysqli_num_rows($result)>=1){
 while ($resultarray=mysqli_fetch_array($result)){
     $output .= "<div class='outputtracking'>
     <p>$resultarray[status]</p>
     <date>$resultarray[data]</date>
     </div>";
 }


$echo =    "
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
       <h2 >Информация о заказе</h2>	
       <div>
 <section class='tracking'>
 
  <div class='forma2'>

$output
    
  </div>
 
 </section>
 </div>
 </div>
 
 
 
 
 ";


}}

?>