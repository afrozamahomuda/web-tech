<!DOCTYPE html>
<html >
<head> 
    <title>
    </title>  
</head>
<body>

    <h3>REGISTRATION</h3>
    <p>
    <form action="data.php" method="POST">
            <label for="username">Name:</label>
            <input type="text" name="name" id="name" >
            <br><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" >
            <br><br>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" >
            <br><br>
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" >
            <br><br>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="text" name="confirmPassword" id="confirmPassword" >
            <br><br>
            <div>
                <legend>Gender:</legend>
                
                    <input type="radio" name="gender" value="Male" /> Male
                    <input type="radio" name="gender" value="Female" /> Female
                    <input type="radio" name="gender" value="Other" /> Other  
                <br>  
            </div><br><br>
            <div>
                <legend>Date of Birth:</legend>
                    <input type="date" name="dateOfBirth" placeholder="Enter your Date of Birth" /> 
               
                    <br> <br>

            </div><br>
            <input type="submit" name="submit" value="Submit" />
            <input type="submit" name="reset" value="Reset"  /> 
            <br><br>
            
    </form>
    </p>
</body>
</html>