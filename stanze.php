<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- js -->
    <script src="js/script.js" charset="utf-8"></script>

    <title>PHP</title>
    <?php
     require_once "data.php";

     $id= $_GET['idStanze'];
     // var_dump($id);

     $conn = getConnection();
     $sql = getStanzeParticolariSql();
     // var_dump($sql); die();
     $stmt = $conn -> prepare($sql);
     $stmt -> bind_param("i", $id);
     $stmt -> execute();
     $stmt -> bind_result($floorStanza, $numLetti);
     $stmt -> fetch();
      echo '<h1>' . 'Numero Piano:' . ' ' . $floorStanza . '</h1>' ;
      echo  '<h1>' . 'Numero di Letti:' . ' '  . $numLetti . '</h1>';

      // closeConn($conn, $stmt);
    ?>



  </head>


  <body>

 </body>
</html>
