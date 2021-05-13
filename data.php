<?php
function getConnection($servername = "localhost",
                       $username = "root",
                       $password = "root",
                       $dbname = "dbhotel"){
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
   }
  return $conn;
}

// function closeConn($con, $stmt){
//   $stmt -> close();
//   $conn -> close();
// }

function getListaStanzeSql(){
  return "
  SELECT stanze.room_number, stanze.id
  FROM `stanze`
  ";
}

function getStanzeParticolariSql(){
  return "
  SELECT stanze.floor, stanze.beds
  FROM `stanze`
  WHERE id = ?
  ";
}

?>
