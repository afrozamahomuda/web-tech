<html>
    <head>
        
        <b><h2>LOGIN</h4></b>
    </head>
    <body>
        <form  method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
                User name: <input type="text" name="fname"><br><br>
                Password : <input type="text" name="pass"><br><br>
                <u></u>
                <input type="checkbox"  name="remember" value="Bike">
                <p style="color:DodgerBlue;"><label >Remember me</label><br><br></p>
                <input type="submit">
        </form>

    <?php
     
     if ($_SERVER["REQUEST_METHOD"] == "POST") {                                         //Name
       $name = $_POST['fname'];
       if(preg_match("/^[a-zA-Z'-]+$/" , $_POST['fname'] )) {
         if(preg_match("/[a-z][^a-z]*[a-z]/i",$_POST['fname'])) {
           echo $name;
         }
         else echo "name must contain at least two charecter";
         }
         else echo "name must contain at least two charecter";
       } 
     ?>
     <br> 

     
     <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $password = $_POST['pass'];
            $specialChars = preg_match('@[^\w]@', $password);

            if(!$specialChars || strlen($password) < 8) {
                echo 'Password should be at least 8 characters in length and should include at least one special charecter';
            }else{
                echo 'Strong password.';
            }  
        }
    ?>   
    </body>
</html>