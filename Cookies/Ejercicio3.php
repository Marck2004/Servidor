<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php

        $arrColores = ['yellow','red','blue','black','green'];

        if(!isset($_COOKIE['contador'])){
            setcookie("contador",0,time()+3600);
            print "Se ha creado la cookie";
            
        }else{
            $contador = $_COOKIE['contador'];
            $contador ++;
            setcookie("contador",$contador,time()+3600);
            print "<div style='width:200px;height:200px;background-Color:".$arrColores[floor($contador % 5)].";'></div>";

        }


    ?>
</body>
</html>