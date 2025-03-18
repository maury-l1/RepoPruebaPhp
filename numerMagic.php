<?php

    if(isset ($_GET['number'])){
        $numUsuario = $_GET['number'];
        echo "Se ha enviado el numero " . $numUsuario . "<br><br/>";
        $numSecreto = $_GET['numSecreto'];
        $numIntentos = $_GET['numIntentos'];
        if ($numUsuario == $numSecreto){
        echo "Has acertado!!";
        }
        if ($numUsuario < $numSecreto){
            echo "El numero secreto es mayor";
            $numIntentos--;
        }
        if ($numUsuario > $numSecreto){
            echo "El numero secreto es menor";
            $numIntentos--;
        }
    }else{
        $numSecreto = rand(0, 10);
        $numIntentos = 3;
        echo "Primera vez que se ejecuta la pagina, numSecreto ->" . $numSecreto;
    }
        if ($numIntentos <= 0){
            echo "Has agotado tus intentos";
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Numero Magico</h1>    
    <header/>
    <div>
        <form method="get" action="numerMagic.php">
            <label for="number">Introduce el numero
                <input type="text" name="number">
            </label>
            <label for="numSecreto">
                <input type="hidden" name="numSecreto" value="<?php echo $numSecreto; ?>"/>
            </label>
            <label for="">
                <input type="number" name="numIntentos" value="<?php echo $numIntentos; ?>" readonly/>
            </label>
            <label for="submit">
                <input type="submit" value="Enviar">
            </label>
        </form>
    </div>
</body>
</html>