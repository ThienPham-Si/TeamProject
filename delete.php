<?php
  include_once "includes/dbh.inc.php";
  if(isset($_POST['delete']) && isset($_POST['idAttributeName'])) {
    $id = $_POST["id"];
    $tableName = $_POST["tableName"];
    $idAttribute = $_POST["idAttributeName"];
    include_once "check.php";
    
    if($canDelete) {
      $deleteQuery = "UPDATE `Theme_Park_Database`.$tableName 
                  SET is_deleted=TRUE 
                  WHERE $idAttribute=$id";

      if (mysqli_query($conn, $deleteQuery)) {
        $conn->close();
        header("Location: success.php");
        exit;
      } else {
        $conn->close();
        header("Location: index.php");
      }
    }
  }    
?>