<?php
session_start();
?>

<!DOCTYPE html>
<html> 
   <head> 
   <title>RECEIPT</title>
   <link rel="stylesheet" href="Ebus.css" type="text/css" />
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        
//Echo session variables that were set in a previous page 
echo "The total amount owed is: " . $_SESSION["total"] . ". <br><br><br> Thank you for shopping with SurgeStoneLTD! We hope you found everything you needed!  <br><br><br> Please keep a copy of this receipt in your inbox until you have successfully set up all cloud accounts."; 
        ?>
        <br> 
        <br>
        <br>
         <a href="../Shop/ShopHomepage.html">Homepage</a>
    
        
    </body>
    
 </html>