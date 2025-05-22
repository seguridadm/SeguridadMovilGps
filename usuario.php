<?php
   $user = $_GET['user'];
   $password = $_GET['password'];
 
   if (($user == "seguridad") AND ($password == "gps")){
      
	   header ('location:ligas.php');
	  
	  
	  //echo "Bienvenido ".$user;
	  
	 
	  
	 
	  
	  
   }
   Else{
   header ('location:mensaje.php');
     // echo "Usuario o contrasena incorrectos";
     // echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><br>REGRESAR</a>';
   }
?>