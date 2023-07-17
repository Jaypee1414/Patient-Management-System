<?php
    include 'connect.php';
    include 'pending.php';

    if(isset($_POST['add'])){
            
        $type = $_POST['type'];
        $result =$_POST['result'];
        $recommend=$_POST['recommend'];
        $date = $_POST['date'];

        $sql_query = "INSERT INTO `pending` (`user_id`, `type`, `result`, `recommendation`, `date`) VALUES ('$value', '$type', '$result', '$recommend', '$date')";

        $data = mysqli_query($conn,$sql_query);

        echo '<script language="Javascript">;
        alert("Patient Add to history");
        location.href="pending.php";
        </script>';
    }
?>


