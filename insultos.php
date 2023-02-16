<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url(style.css);
        </style>
    </head>
    
 <body>
   <header>
      
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  
	  
    </header>
   <main>
	   
	   /**
	* Mediante file_get_contents llamamos a la api de 
	*evilinsult que devuelve un json con insultos 
	* @author Carlos Fernández
	*/	
	   
	<?php
		$url = "https://evilinsult.com/generate_insult.php?lang=en&type=json";
        $insults = file_get_contents($url);
        $insults = json_decode($insults, true);
		echo "<h1>{$insults["insult"]}</h1>";
	?>
	<br>
	<br>
	<button onClick="window.location.reload();">New insult</button>
				   
  </main>
  <footer>
      <p>Carlos Fernández Parras 77332667C</p>
    </footer>
 </body>
</html>
