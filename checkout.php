<html>
    <head>
        <title>Check-out</title>

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}



@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
    </head>
    
    <body>
    <h1>Check-out</h1>
        <div class="row">
  <div class="col-75">
    <div class="container">
        
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fal fa-cc-visa" style="color:navy;">visa</i>
              <i class="fa fa-cc-maestro" style="color:blue;">maestro</i>
              <i class="fa fa-cc-mastercard" style="color:red;">mastercard</i>
              <i class="fa fa-cc-discover" style="color:orange;">discover</i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" maxlength="15" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" maxlength="16" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="month" id="expmonth" name="expmonth"  placeholder="September" required>
            <div class="row">
              <div class="col-50"><br>
                <label for="expyear">Exp Year</label>
                <input type="tel" id="expyear" name="expyear" maxlength="4" placeholder="2018" required>
              </div>
              <div class="col-50"><br>
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr" required> Shipping address same as billing
        </label>
        <input type="submit" value="Proceed to pay" class="btn" required>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>3</b></span></h4>
      <p> <input type="checkbox" ><a href="#" style="text-decoration:none">Creative wildlife photography</a> <span class="price">$15.99</span></p>
      <p> <input type="checkbox" ><a href="#" style="text-decoration:none">Take pictures like a pro</a> <span class="price">$12.99</span></p>
      <p> <input type="checkbox" ><a href="#" style="text-decoration:none">Wildlife Photography at Home</a> <span class="price">$8.99</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$35</b></span></p>
        <input type="button" value="Select" class="btn">
    </div>
  </div>
</div>
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>