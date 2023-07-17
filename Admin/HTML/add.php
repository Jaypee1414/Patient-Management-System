<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/admin.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div id="header">
            <div id="logo">
                <img src="../IMG/logo.jpg" alt="">
            </div>
            <ul>
                <a href="">
                    <li id="add"> ADD NEW PATIENT</li>
                </a>
                <a href="try.php">
                    <li>PENDING PATIENT</li>
                </a>
                <a href="history.php">
                    <li>PATIENT'S HISTORY</li>
                </a>
                </a>
                <a href="index.php">
                    <li>LOG-OUT</li>
                </a>
            </ul>
        </div>
    </header>

    <section id="table">
        <form action="" method="post">
        <table width=75%" cellpadding="5" cellspacing="0">
            <tr>
                <td colspan="5" align="center" id="title">MEDICAL DIAGNOSTIC CENTER NEW PATIENT</td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="fname" name="firstname" placeholder="FIRSTNAME" required>
                </td>
                <td>
                    <input type="text" id="lname" name="lastname" placeholder="LASTNAME" required>
                </td>
                <td>
                    <input type="number" id="Age" name="age" placeholder="AGE" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="date" id="birthday" name="birthday" placeholder="BIRTHDAY" required>
                </td>
                <td>
                    <input type="text" id="address" name="address" placeholder="ADDRESS" required>
                </td>
                <td>
                    <input type="number" name="contact" id="contact" placeholder="CONTACT NUMBER">
                </td>
            </tr>
            <tr>
                <td colspan="5" align="end" id="btn">
                        <button name="added">ADD</button>
                </td>
            </tr>
        </table>
        </form>
    </section>
    
</body>
</html>


<?php

if(isset($_POST['added'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $birthday=$_POST['birthday'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];

    $query = "INSERT INTO `patient` (firstname,lastname,age,birthday,address,contact) VALUES ('$firstname','$lastname','$age','$birthday','$address','$contact')";

    $data = mysqli_query($conn,$query);
    
    echo '<script language="Javascript">;
    alert("Add to pending");
    location.href="add.php";
    </script>';
    }  
?>






