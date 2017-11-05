<html>
<head>

    <meta charset="UTF-8">
    
    <title>
        
         Battleship2  
         
    </title>
    
    <script>
                
        function schieten(m){
            
            console.log (m);
            
            //document.getElementById("knop"+m).value = "test2";
            document.getElementById("knop"+m).style.background = "red";
            
            
        }
        
    
    </script>
     
 



</head>


    <h1><font color="darkred">Battleship</h1>

    <?php
    
     
        for($x = 0; $x < 10; $x++) {
            
            echo"<br>";
            for($y = 0; $y < 10; $y++) {
           
                $id= $x.$y;
            
            echo "<input onclick=schieten(".$id.") type=button id=knop".$id." >";
            
            }
        }    
            
            
    
    ?>




</html>