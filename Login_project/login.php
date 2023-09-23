<!DOCTYPE html>  
<html>  
    <body>  
        
    <h1>My first PHP page</h1>  
            
        <?php  

         for ($i=0; $i < 10; $i++) { 
            # code...
            echo " <strong> Value of i is $i <strong> <br>";
         }
         echo "<br>"; 
         echo " Username is ".$_POST['uname']."<br>";

         echo "Password is ".$_POST['pass'];

        ?>  
        

    </body>  
</html>