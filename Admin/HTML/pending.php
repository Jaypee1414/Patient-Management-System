<?php
session_start();
include 'connect.php';
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/pending.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div id="header">
            <div id="logo">
                <img src="../IMG/logo.jpg" alt="">
            </div>
            <ul>
                <a href="add.php">
                    <li> ADD NEW PATIENT</li>
                </a>
                <a href="">
                    <li id="add">PENDING PATIENT</li>
                </a>
                <a href="">
                    <li>PATIENT'S HISTORY</li>
                </a>
                
                <a href="">
                    <li>EDIT PACKAGE</li>
                </a>
                <a href="">
                    <li>LOG-OUT</li>
                </a>
            </ul>
        </div>
    </header>

    <section id="table">
        <table width=77.8%" cellpadding="0" cellspacing="5" id="main">
            <tr>
                <td colspan="9" align="center" id="title">PENDING PATIENT RECORD</td>
            </tr>

            <tr align="center" id="head">
                <td>ID NO.</td>
                <td>NAME</td>
                <td>CONTACT</td>
                <td>TYPE</td>
                <td>RESULT</td>
                <td>RECOMMENDATION</td>
                <td>DIAGNOSE DATE</td>
            </tr>
            <tr align="center">
                <?php
                    $count = 1;
                    $data = "SELECT * FROM patient ";
                    $rows = mysqli_query($conn, $data);
                    
                    while ($rs =mysqli_fetch_array($rows)) {
                ?>
                <form 
                    action=""
                    method="post"
                    >

                    <td>
                        <?php $value= $rs['user_id']?>
                        <?php echo $rs['user_id']?>
                    </td>
                    <td>
                        <?php echo $rs['lastname'],', ',$rs['firstname']; ?>
                    </td>
                    <td>
                        <?php echo $rs['contact'] ?>
                    </td>

                   
                   
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
                                    <a href="pending.php?id=<?php echo $rs['user_id']?>"> <button name="add">DONE</button></a>
                                </td>
                            </tr>
                        </form>
                    <?php

                 $count++;
                 
                }

                 ?>

            </tr>
        </table>
    </section>
    
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
        location.href="pending.php";
        </script>';
    
    }
?>
