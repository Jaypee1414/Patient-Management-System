<?php
session_start();
include 'connect.php';

$id = $_GET['id'];

    $fetch = "SELECT * FROM official WHERE user_id='".$_GET['id']."'";
    $sql = mysqli_query($conn,$fetch);
    $rest = mysqli_fetch_array($sql);
    $lastname = $rest['lastname'];
    $firstname =$rest['firstname']; 
    $address = $rest['address'];
    $contact = $rest['contact'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/patient_history.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <a href="history.php"><button>BACK</button></a>
        <table width=90%" cellpadding="0" cellspacing="5" id="one">
            </tr>
            <tr>
                <td colspan="4" align="center" id="title"><h2>Patient diagnose list </h2></td>
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
        </table>

        <table width="90%" cellpadding="5" cellspacing="0" id="two">
            <?php               
                $data = "SELECT * FROM pending WHERE user_id like '%".$id."%' ";
                $rows = mysqli_query($conn,$data);
                while($rs = mysqli_fetch_array($rows))
                { ?>

                    <tr>
                        <td id="date">
                            <?php echo $rs['date']?>
                        </td>
                    </tr>

                    <tr id="record">
                        <td class="info" align="center">
                            <?php echo $rs['type']?>
                        </td>
                        <td class="info">
                            <?php echo $rs['result']?>
                        </td>
                        <td class="info">
                            <?php echo $rs['recommendation']?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"><hr></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
</body>
</html>