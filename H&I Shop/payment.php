<!DOCTYPE html>
<html>
<head>
  <title>Payment Template</title>
  <link rel="stylesheet" type="text/css" href="css/payment.css">
</head>
<body>
  <div class="container">
    <h1>Payment Details</h1>
    <form>
      <div class="form-group">
        <label for="card-number">Card Number</label>
        <input type="text" id="card-number" name="card-number" placeholder="Enter your card number" required>
      </div>
      <div class="form-group">
        <label for="expiry-date">Expiry Date</label>
        <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
      </div>
      <div class="form-group">
        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
      </div>
      <div class="form-group">
        <label for="name">Cardholder Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <button type="submit" class="btn">Pay Now</button>
    </form>
  </div>
</body>
</html>
