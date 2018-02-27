<?php> 
session_start();
?>



<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
 <!--Adding Bootstrap-->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css" />
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "EBus3.php">
                
                 <label for="user_email">Email</label> 
                 <input type="email" id="user_email" name="user_email" placeholder="Email Address"> 

                
                 <label for="user_pin">PIN</label>
                <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
              <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
                 <br/>
             <button onClick="validateDetails()">Validate</button>

            </div>
    
        
        <script type="text/javascript" src="EBus2_validator.js"></script>
        
        <br />
    <a href="../homepage.html" class="btn btn-success">Homepage</a>
    
    
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        
      
    </body>
    
    
    
</html>
