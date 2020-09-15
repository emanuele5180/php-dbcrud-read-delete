<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
  echo "Connection failed: " . $conn-> connect_error;
  return;
}


$sql = "
  SELECT *
  FROM pagamenti
";

$result = $conn->query($sql);

if( $result && $result->num_rows > 0 ) {
  echo '<ul>';

  while( $row = $result->fetch_assoc() ) {
    if($row['id'] == 7) {
      echo '<li style="font-weight: bold;">';
    } else {
      echo '<li>';
    }

    echo $row['id'] ." - " .$row['status'] ." - " .$row['price'];
    echo '</li>';
  }

  echo '</ul>';
} else {
  print_r($result);
}
$conn->close();

?>









<!-- //
// // coumicazione db
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "dbhotel";
//
// // db check db situaton
// $conn = new mysqli($servername, $username, $password, $dbname);
//
// if ($conn && $conn->connect_error){
//   echo "connection failed" . $conn -> connect_error;
//   return;
// }
//
// // creazione query sql
// $sql = "
// SELECT *
// FROM pagamenti
// ";
// // while on result
// $result = $conn -> query($sql);
// if($result && $result -> num_rows > 0){
//   echo <ul>;
//
//   while($row = $result -> fetch_assoc()){
//     echo <li>;
//     echo $row['id'] ." ". $row['status'] ." ". $row['price'] . "<br>";
//     echo </li>;
//   }
//   echo </ul>;
// }elseif ($result) {
//   echo "0 results";
// }else {
//   echo"query error";
// }
//
//
//
// //close conn
// $conn->close();
// -->
