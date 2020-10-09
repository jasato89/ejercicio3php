<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<h1>Soluciones de los ejercicios</h1>
<h2>Ejercicio 5</h2>

<div class="main main2">
    
        <form action="" method="POST">
            <label for="money">Introduzca la cantidad:</label><br>
            <input type="number" name="money" id="money">
            <label for="exchange"></label><br>
            <select id="exchange" name="exchange">
                <option value="1">US$ -> AUS$</option>
                <option value="2">AUS$ -> US$</option>
            </select><br>
            <button class="button redbg" type="submit" value="submit" name="submit">Convertir</button>
        </form>
    
    <div>
        <?php 
        if(isset($_POST['submit'])) {
            $amount = $_POST['money'];
            $currencyexchange = $_POST['exchange'];
            $conversion;

            if ($currencyexchange==1) {
                $conversion = $amount * 1.38;
                print('<p class="roundedconversion">' . $conversion . ' AUS$' . '</p>');

            } else {
                $conversion = $amount * 0.72;
                print('<p class="roundedconversion">' . $conversion . ' US$' . '</p>');

            }
        

        } ?>
    </div>

    <div class="innerDiv">
        <h3>Código fuente:</h3>
        
    </div>
    <img src="05.png" alt="">
    <li><a class="button goback" href="index.php">Volver a los ejercicios</a></li>

 
    

</div>


</body>

</html>