
<?php

$con=mysqli_connect("au-cdbr-sl-syd-01.cleardb.net","b44866fcdf9f16","31a648f9","ibmx_1213db0de2271f4");

if(!$con)
{
	echo "not connected";
die('could not connect:'.mysqli_error());
}
echo 'hello';
echo "connected";
//mysql_select_db("b1d6fc7b3aade6",$con);

$sql="INSERT INTO product(pname,pqty,ptype,pprice,description)VALUES('$_POST[pname]','$_POST[pqty]','$_POST[ptype]','$_POST[pprice]','$_POST[message]')";

if($con->query($sql)=== TRUE)
{
	
echo " \n added successfully";	
	
}
else
{
	
	echo "error".$sql." <br>".$con->error; 
}

$sql = "SELECT * FROM product";
$result = $con->query($sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "pname: " . $row["pname"]. " - pqty: " . $row["pqty"]. "ptype:".$row["pqty"]."pprice:".$row["pprice"]."description".$row["description"]. "<br>";
    }
} else {
    echo "0 results";
}*/

echo "<table border='1'>

<tr>

<th>name</th>

<th>quantity</th>

<th>Type</th>

<th>Price</th>


<th>Description</th>

</tr>";

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['pname'] . "</td>";

  echo "<td>" . $row['pqty'] . "</td>";

  echo "<td>" . $row['ptype'] . "</td>";

  echo "<td>" . $row['pprice'] . "</td>";
  
  echo "<td>" . $row['description'] . "</td>";

  echo "</tr>";

  }

echo "</table>";




mysqli_close($con)

?>
