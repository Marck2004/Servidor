

    <?php

        $texto = $_REQUEST['Validaciones2'];

        print "Ha escrito ".$texto." <br>";

        if(preg_match('/^[a-zA-Z]\s[a-zA-Z]+$/',$texto)){
            print " la cadena ".$texto." es una o mas letras sueltas separadas por espacios";
        }else{
            print " la cadena ".$texto." <span style='color:red';>no</span> 
            es una o mas letras sueltas separadas por espacios";
        }
        print "<br>";
        if(preg_match('/^(\p{L}+\s)+\p{L}+$/',$texto)){
            print " la cadena ".$texto." son dos o mas letras sueltas separadas por espacios";
        }else{
            print " la cadena ".$texto." <span style='color:red';>no</span> 
            son dos o mas letras sueltas separadas por espacios";
        }
        print "<br>";
        if(preg_match('/^[a-zA-Z]\s[a-zA-Z]+$/',$texto)){
            print " la cadena ".$texto." es una o mas palabras con letras inglesas";
        }else{
            print " la cadena ".$texto." <span style='color:red';>no</span> 
            es una o mas caracteres con letras inglesas";
        }
        print "<br>";
        if(preg_match('/^[A-Z]+$/i',$texto)){
            print " la cadena ".$texto." es una unica palabra en mayusculas";
        }else{
            print " la cadena ".$texto." <span style='color:red';>no</span>
             es una unica palabra en mayusculas";
        }
        print "<br>";
        if(preg_match('/^(00[0-30])\/(00[0-12])\/(0000[1-9]{3})+$/',$texto)){
            print " la cadena ".$texto." es una fecha con el formato dd/mm/aa";
        }else {
            print " la cadena ".$texto." <span style='color:red';>no</span>
            es una fecha con el formato dd/mm/aa";
        }
        print "<br>";
        if(preg_match('/^\d+\.\d+$/',$texto)){
            print " la cadena ".$texto." es un numero con signo con dos decimales";
        }else{
            print " la cadena ".$texto." <span style='color:red';>no</span>
            es un numero sin signo con dos decimales";
        }
        print "<br>";
        if(preg_match('/^\d+\.\d+$/',$texto)){
            print " la cadena ".$texto." es un numero sin signo con dos decimales";
        }else{
            print " la cadena ".$texto." <span style='color:red';>no</span>
            es un numero con signo con dos decimales";
        }
        print "<br>";
        if(preg_match('/^[a-zA-Z]+$/',$texto)){
            print " la cadena ".$texto." es una contraseña";
        }else{
            print " la cadena ".$texto." <span style='color:red';>no</span>
            es una contraseña";
        }

    ?>