<?php


//connect to db 
require('connect.php'); 

//set up our query 
$sql = "SELECT * FROM songs"; 

//prepare the query 

$statement = $db->prepare($sql); 

//execute the query 
$statement->execute(); 

//use fetchAll to store results 
$records = $statement->fetchAll(); 

//echo out top of table 

echo "<table class='table table-striped'><tbody>"; 

foreach($records as $record) {
    echo"<tr><td>". $record['first_name']. 
    "</td><td>" . $record['last_name'] . "</td><td>" . $record['phone'] . "</td><td>" . $record['email'] . "</td><td>" . $record['chin_date'] . "</td><td>" . $record['chout_date']. "</td></tr>"; 
}

echo "</tbody></table>"; 

//close the DB connection 
$statement->closeCursor(); 

?>
