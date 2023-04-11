<?php
// Inicia la sesión

SESSION_START();
//echo "<link href='estilos/stilosBienbenida.css' rel='stylesheet' type='text/css'>";
//if(isset($_SESSION['username'])) {
    // Si el usuario ha iniciado sesión, muestra su nombre completo
    
    //echo  "<div>   Bienvenido,  {$_SESSION['nombreCompleto']} !    </div>";
 
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='estilos/Bienvenida.css' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="Bienbenida">
        <div class="anima"> 
            <?php echo "Bienvenido!, {$_SESSION['nombreCompleto']}" ;  ?> 
        </div>
    </div >

    <div>
        
    </div>
</body>
</html>