<!DOCTYPE HTML>
<html> 
<body>

<form action="process.php" method="post">
Name: <input type="text" name="name"><br><br><br>
E-mail: <input type="text" name="email"><br><br><br>
Shipping address: <input type="text" name="address"><br><br><br>
<p>Product,Price is 5 EUR /unit</p>
<select name="product">
  <option value="shoes">Shoes</option>
  <option value="sneakers">Sneakers</option>
  <option value="boots">Boots</option>
  <option value="sandals">Sandals</option>
</select>
Size:
<select name="size">
  <option value="40">40</option>
  <option value="41">41</option>
  <option value="42">42</option>
  <option value="43">43</option>
</select>
Quantity : <input type="text" name="quantity"><br>
<input type="submit">
</form>

</body>
</html>