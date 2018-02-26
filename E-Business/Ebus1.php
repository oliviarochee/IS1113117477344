

<!DOCTYPE html> 
<html>
    <head> 
    <title>Select Product</title>
    
    <!--jQuery-->
    <script src="https://ajax-googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src ="cost_calc.js"></script>
    
    
    <!--Adding Bootstrap-->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    </head>
    
    <body> 
    
    <h4>Select a product</h4>
    <br/>
    
    <form method="post" action = "Ebus2.php">
        
        <label for = "Salesforce">
            <input type = "radio" id ="salesforce" name = "product" onclick="disablebtnProceed()"/>
            salesforce @ $100
        </label>
        
        <br/>
        
          <label for "aws">
          <input type = "radio" id ="aws" name = "product" onclick="disablebtnProceed()"/>
          AWS=$300
          </label>
          
          <br/>
          <br/>
          
          <label for ="subtotal">
              Sub Total
              <input type = "text" id ="subtotal" name = "subtotal" value = "0.00" readonly/>
          </label>
         
         <br/>
         
         <label for ="total">
             Total
             <input type = "text" id ="total" name = "total" value = "0.00" readonly/>
         </label>
         
         <br/>
         
          <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button> 
    </form>
    
    <br/>
    <button onClick="calcSub()">Calculate Cost</button>
    <a role="button" href="Ebus1.php">Clear Choice</a>
    
    
   <a href="EBus2.php" class="btn btn-dark">Pin Details</a>
    </body>
</html>