<?php

 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "dbhotel";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn &&$conn ->connect_error) {

   echo "Connection failed: " . $conn -> connect_error;

   return;
 }

 $sql = "

SELECT id, status, price
FROM pagamenti
WHERE price > 600.00

 ";

 $result = $conn -> query($sql);

 if ($result && $result -> num_rows > 0) {
   echo <ul>

   while ($row = $result -> fetch_assoc()) {
     echo '<li>';
     echo $row['id'] ." - " .$row['status'] ." - " .$row['price'];
     echo '</li>';

   }
 } elseif ($result) {
    echo "0 results";
 }else {
   echo "query error";
 }
 echo '</ul>';
 $conn -> close();



 ?>
