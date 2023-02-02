
  <head>
    <title> Complete Car Order </title>
  </head>
  
    <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Order";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		if (isset($_POST['fname']))
{

      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $Street = $_POST["Street"];
      $city = $_POST["city"];
      $Mobile = (int)$_POST["Mobile"];
      $Color = $_POST["Color"];
      $Brand = $_POST["Brand"];
      $payment = $_POST["payment"];
      $Email = $_POST["Email"];
      $Price = $_POST["Price"];
	  
	  $sql = "INSERT INTO automobile(fname, lname, Street, city, Mobile, Color, Brand, payment, Email, Price) VALUES ('$fname', '$lname','$Street','$city','$Mobile','$Color','$Brand','$payment','$Email','$Price')";
	
	if (mysqli_query($conn, $sql)) 
	{
      echo "New record created successfully in table \"automobile\" <br> ";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	 
	 echo "<table border>
<tr>
<th>fname</th>
<th>lname</th>
<th>Street</th>
<th>city</th>
<th>Mobile</th>
<th>Color</th>
<th>Brand</th>
<th>payment</th>
<th>Email</th>
<th>Price</th>

<tr>
";
	 $query = "SELECT * FROM automobile";
	 $result = $conn->query($query);
	 while($row = mysqli_fetch_array($result))
{

	

echo "<tr>
<td>".$row['fname']."</td>
<td>".$row['lname']."</td>
<td>".$row['Street']."</td>
<td>".$row['city']."</td>
<td>".$row['Mobile']."</td>
<td>".$row['Color']."</td>
<td>".$row['Brand']."</td>
<td>".$row['payment']."</td>
<td>".$row['Email']."</td>
<td>".$row['Price']."</td>
</tr>";
}
}
	 
    ?>
    

