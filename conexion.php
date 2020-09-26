 <?php
 	// Esta conexion es con mysql.
 	$host = 'localhost';
 	$user = 'root';
 	$password = '1234'; 	
    $db = 'PROYECTG_1';

    // CONEXION AL SERVIDOR
    $conect = @mysqli_connect($host,$user,$password,$db);

    if (!$conect) {
    	            echo "Error al conectar";    
                  } else {
    	                # echo "La conexion ha sido exitosa";
                         }
 ?>