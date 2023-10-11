

    <?php

    $arr = ['violet','red','blue','yellow','grey','green','black','purple','orange','pink','blue'];

    for ($i=0; $i < rand(0,10); $i++) { 
        
    print "<svg width=200 height=200 style='float:left;border:2px solid black;'> <circle
            cx=100 cy=100 r=90 stroke=".$arr[rand(0,10)]."
            stroke-width=2 fill=".$arr[rand(0,10)]."> </svg>";
    }


    ?>