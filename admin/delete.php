<?php

$db1 = mysqli_connect('localhost', 'root', '', 'dbms');
    if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        $query1="delete from complaints where Student_Id='$id'";
        $results1 = mysqli_query($db1, $query1);
        if ($results1) {
        echo "Record deleted successfully";
        header('location: admin_studentdetail.php');
      }
      else {
        echo "Error deleting record: " . mysqli_error($db1);
      }
      }
mysqli_close($db1);

?>