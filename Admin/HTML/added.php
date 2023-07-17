<?php
session_start();
include 'connect.php';

$id = $_GET['id'];

    $fetch = "SELECT * FROM patient WHERE user_id='".$_GET['id']."'";
    $sql = mysqli_query($conn,$fetch);
    $rest = mysqli_fetch_array($sql);
    $lastname = $rest['lastname'];
    $firstname =$rest['firstname']; 
    $address = $rest['address'];
    $contact = $rest['contact'];
    $birthday = $rest['birthday'];
    $age = $rest['age'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/try.css">
    <title>Document</title>
</head>
<body>

<a href="try.php"><button>BACK</button></a>
<table width=100%" cellpadding="0" cellspacing="5" id="main_added">
            </tr>
            <tr>
                <td colspan="9" align="center" id="title">ADDING PATIENT RECORD</td>
            </tr>
            <tr>
                <td>ID NO:<?php echo $id?></td>
            </tr>
            <tr>
                <td>Name:<?php echo $firstname,' ',$lastname?></td>
            </tr>
            <tr>
                <td>Address:<?php echo $address?></td>
            </tr>
            <tr>
                <td>Contact Number:<?php echo $contact?></td>
            </tr>
            <tr align="center">
                <form 
                    action=""
                    method="post"
                    >
                        <td>
                            <input type="text" id="address" name="type" placeholder="DIAGNOSE TYPE" required>
                        </td>
                        <td>
                            <input type="text" id="address" name="result" placeholder="RESULT" required>
                        </td>
                        <td>
                            <input type="text" id="address" name="recommend" placeholder="RECOMMENDATION" required>
                        </td>
                        <td>
                            <input type="date" id="date" name="date" placeholder="DIAGNOSE DATE" required>
                        </td>
                            <tr>
                                <td colspan="9" align="end" id="btn">
                                     <button name="add">DONE</button>
                                </td>
                            </tr>
                        </form>
        </table>
</body>
</html>




<?php
if(isset($_POST['add'])){

        # code...
        $type = $_POST['type'];
        $result =$_POST['result'];
        $recommend=$_POST['recommend'];
        $date = $_POST['date'];
    
        $sql_query = "INSERT INTO `pending` (`user_id`, `type`, `result`, `recommendation`, `date`) VALUES ('$id', '$type', '$result', '$recommend', '$date')";
    
        $data = mysqli_query($conn,$sql_query);
    
        echo '<script language="Javascript">;
        alert("Patient Add to history- ");
        location.href="try.php";
        </script>';
    
    }
?>



<?php
if(isset($_POST['add'])){

        $sql_query = "INSERT INTO `official`(`user_id`, `firstname`, `lastname`, `age`, `birthday`, `address`, `contact`) VALUES ('$id','$firstname','$lastname','$age','$birthday','$address','$contact')";
    
        $data = mysqli_query($conn,$sql_query);
    }
?>

<?php

if(isset($_POST['add'])){

    $query ="DELETE FROM `patient` WHERE user_id = '$id'";
    $run = mysqli_query($conn,$query);
    }
?>
