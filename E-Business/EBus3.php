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
echo "Total is " . $_SESSION["Total"] . ".";
        ?>
        
    </body>
    
 </html>