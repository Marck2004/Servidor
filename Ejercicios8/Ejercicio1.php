
    <?php

        $texto = $_REQUEST['Validaciones1'];

        print "Ha escrito: ".$texto;
print "<p>";
    if(empty($texto)){
        print " la cadena ".$texto." esta vacia";
    }else{
        print " la cadena ".$texto." <span style='color:red;'>no</span> esta vacia";
    }
print "</p>";

print "<p>";
    if(preg_match('/^[a-zA-Z]+$/',$texto)){
        print " la cadena ".$texto." es una unica palabra";
    }else{
        print " la cadena ".$texto." <span style='color:red;'>no</span> es una unica palabra";
    }
    print "</p>";

    print "<p>";
    if(preg_match('/^[a-zA-Z]+\s[a-zA-Z]+$/',$texto)){
        print " la cadena ".$texto." son dos palabras";
    }else{
        print " la cadena ".$texto." <span style='color:red;'>no</span> no son dos palabras";
    }
    print "</p>";

    print "<p>";
    if(preg_match('/^[a-zA-Z]+$/',$texto) && preg_match('/^[a-zA-Z]+$/',$texto)){
        print " la cadena ".$texto." es una unica palabra <span style='color:red;'>no</span> acepta caracteres ingleses";
    }else{
        print " la cadena ".$texto." es una unica palabra que acepta caracteres ingleses";
    }
    print "</p>";
    print "<p>";

    if(preg_match('/^[[:lower:]][aeiou]+$/',$texto)){
        print " la cadena ".$texto." es una cadena de vocales minusculas sin acentuar en orden alfabetico";
    }else{
        print " la cadena ".$texto." <span style='color:red;'>no</span> es una cadena de vocales minusculas sin acentuar en orden alfabetico";
    }
    print "</p>";
    print "<p>";
    if(preg_match('/^[0-9]+$/',$texto)){
        print " la cadena ".$texto." es un solo numero";
    }else{
        print " la cadena ".$texto." <span style='color:red;'>no</span> es un solo numero";
    }
    print "</p>";
    print "<p>";
    if(preg_match('/^[0-9]+$/',$texto) && $texto % 2 == 0){
        print " la cadena ".$texto." es un unico numero par";
    }else{
        print " la cadena ".$texto." <span style='color:red;'>no</span> un unico numero par";
    }
    print "</p>";

    print "<p>";
    if(preg_match('/^[69][0-9]+$/',$texto)){
        print " la cadena ".$texto." es un telefono de 9 cifras que empieza por 6 o 9";
    }else{
        print " la cadena ".$texto." <span style='color:red;'>no</span> es un telefono de 9 cifras que empieza por 6 o 9";
    }
    print "</p>";

    print "<p>";
    if(preg_match('/^[0-9]{1,8}[A-Za-z]$/',$texto)){
        print " la cadena ".$texto." es un numero del dni con letra inglesa alfinal";
    }else{
        print " la cadena ".$texto." <span style='color:red;'>no</span> es un numero del dni con letra inglesa alfinal";
    }
    print "</p>";

    print "<p>";
    if(preg_match('/^[0-9]{1,5}+$/',$texto)){
        print " la cadena ".$texto." es un numero de codigo postal";
    }else{
        print " la cadena ".$texto." <span style='color:red;'>no</span> es un numero de codigo postal";
    }
    print "</p>";

    
    ?>