<!DOCTYPE HTML>
<html> 
<body>

Thank you  <?php echo $_POST["name"]; ?><br><br>
Your email address is: <?php echo $_POST["email"]; ?><br><br>
Your shipping address is :<?php echo $_POST["address"]; ?><br><br>
and you ordered :<?php echo $_POST["product"]; ?> Size <?php echo $_POST["size"]; ?><br>
Quantity:<?php echo $_POST["quantity"]; ?><br>
Total price:<?php echo $_POST["quantity"]*5; ?>
</body>
</html>