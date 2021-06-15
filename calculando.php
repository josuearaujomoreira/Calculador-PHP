<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    
<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $opcao = $_POST["opcao"];

    switch($opcao){

        case "soma":
            $result = $num1+$num2;
            echo "A soma dos número é: ".$result;
            break;
        case "sub": 
            $result = $num1-$num2;
            echo "A subtração dos número é: ".$result;
            break;
        case "Mult": 
            $result = $num1*$num2;
            echo "A Multiplicação dos número é: ".$result;
            break;
        case "divisao": 
            $result = $num1/$num2;
            echo "A divisão dos número é: ".$result;
            break;
    }
?>
</div>
    
</body>
</html>
