<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <h1>Calculadora fullstack!</h1>
    <form action="calculadora.php" method="post">
        <label>Numero 1</label>    
        <input type="text" name="numero1" id=""></input>

        <label>Numero 2</label>    
        <input type="text" name="numero2" id=""></input>

        <input type="submit" value="Calcular"></input>

    </form>    
    
    <hr/>
    <p>Resultado da operação</p>
    <?php
        if(empty([$_POST]))

    
    
    ?>
</body>
</html>