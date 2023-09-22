    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php

    $valordado1 = rand(1,6);

    $valordado2 = rand(1,6);
    

    print "<img src='img/$valordado1.svg'><br>";
    print "<img src='img/$valordado2.svg'><br>";

    
    if($valordado1 == $valordado2){
        print("Ha sacado pareja de ".$valordado1);
    }else if($valordado1 > $valordado2){
        print ("El valor mayor es ".$valordado1." no son iguales");
    }else if($valordado2 > $valordado1){
        print ("El valor mayor es ".$valordado2." no son iguales");
    }
    ?>
    </body>
    </html>
    