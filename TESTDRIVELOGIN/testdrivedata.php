<!DOCTYPE html>
<link rel="icon" type="image/png" href="../Login_v20/images/icons/BMW_Logo.png"/>
<html>
<head>
 <title>Test Drive Customers List</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: blue;
   font-family: monospace;
   font-size: 16px;
   text-align: left;
     } 
  th {
   background-color: blue;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
	
 <table>
 <tr>
  <th>Id</th> 
  <th>Name</th> 
  <th>Last Name</th>
	 <th>Mail</th>
	 <th>City</th>
	 <th>Adress</th>
	 <th>Time</th>
	 <th>Date</th>
	 
 </tr>
 <?php
	
$conn = mysqli_connect("localhost", "root", "", "bmwdatabase");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
	 
  $sql = "SELECT id_test, name,surname,email,city,message,time,date FROM testdrivejoin";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   
   while($row = $result->fetch_assoc()) {
    echo "<tr>
	   <td>" .$row["id_test"]. "</td>
	   <td>" .$row["name"] . "</td>
	   <td>". $row["surname"]. "</td>
	   <td>". $row["email"]. "</td>
	   <td>" .$row["city"] . "</td>
	   <td>" .$row["message"]. "</td>
	   <td>" .$row["time"] . "</td>
	   <td>" .$row["date"]. "</td>
	   
	   </tr>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>