<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
       <link rel="stylesheet" href="Ebus.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
  

      

    </head>
    
    <body>
        <div class="box1">
            
             <center><h1>SurgeStoneLTD</h1></center>
           
       
        <center>
       
        <h1>Order Form</h1>
        
          <form name="myForm" method="POST" onsubmit="return validateForm()" action="EBus2.php">
        
        
            
            </br>
            <h3>Select a product</h3>
            
           
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
             </br>
              </br>
            
             <label for="cloud">
                <input type="radio" id="cloud" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            
          
              </br>
                </br>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            
            </br>
              </br>
             <label for="gmail">
                <input type="radio" id="gmail" name="product" onclick="disablebtnProceed()"/>
                Gmail @ $250
            </label>
            
              </br>
         </br>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
          </br>
            </br>
            
             <label for="discount">
              Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
              </br>
                </br>
              
            <label for="vat">
               Vat @ 10% 
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            </br>
              </br>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            
            </br>
            </br>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
        </center>
       
        
    </body>
</html>