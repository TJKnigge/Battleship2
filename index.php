<html>
<head>

    <meta charset="UTF-8">
    
    <title>
        
         Battleship2  
         
    </title>
    
    <script>
                
        function schieten(m){
            
            console.log (m);
            document.getElementById("knop"+m).value = "test2";
            
        }
        
    
    </script>
     
 



</head>


    <h1><font color="darkred">Battleship</h1>

    <?php
    
    
        for($x = 0; $x < 10; $x++) {
            
           
          
            
            echo "<input onclick=schieten(".$x.") type=button value=test1 id=knop".$x." >";
            
           
        }    
            
            
    
    ?>




</html>