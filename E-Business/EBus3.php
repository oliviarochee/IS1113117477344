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
echo "The total amount owed is: " . $_SESSION["total"] . ". <br> Thank you for shopping with SurgeStoneLTD! We hope you found everything you needed!  <br> Please keep a copy of this receipt in your Inbox"; 
        ?>
        
    </body>
    
 </html>