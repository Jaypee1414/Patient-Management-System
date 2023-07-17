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
    <link rel="stylesheet" href="../CSS/try.css">
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


    <form 
            action=""
            method="post">
            
        <div id="search">
            <input type="search" name="searchname" id="srch" placeholder="">
            <input type="submit" value="Search" id="btn" name="search">
        </div>
    </form>




    <section id="table">
        
        
        <table width="79.9%" cellpadding="0" cellspacing="0" id="main">
            <tr>
                <td colspan="9" align="center" id="title">PENDING PATIENT RECORD</td>
            </tr>

            <tr>    
                <td colspan="3">Search Patient ID no</td>
            </tr>

            
            <tr align="center">
                <td class="head">PATIENT</td>
                <td class="head">ID NO.</td>
                <td class="head">NAME</td>
                <td class="head">CONTACT</td>
                <td class="head">AGE</td>
                <td class="head">ADDRESS</td>
            </tr>
           
                <?php
                    $count = 1;

                    if (isset($_POST['search'])) {
                        # code...
                        $search = $_POST['searchname'];
                        $data = "SELECT * FROM patient WHERE user_id like '%".$search."%' ";
                    }else{
                        $data = "SELECT * FROM patient";
                    }
                    $rows = mysqli_query($conn, $data);
                    while ($rs =mysqli_fetch_array($rows)) {
                ?>
        
                <tr align="center" id="info">
                    <td>
                        <img src="../IMG/patient.png" alt="">
                    </td>
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
                        <?php echo $rs['age'] ?>
                    </td>
                    <td>
                        <?php echo $rs['address'] ?>
                    </td>
            
                       
                            <td colspan="9" align="end" id="btn">
                                <a href="added.php?id=<?php echo $rs['user_id']?>">
                                <button>
                                    EDIT
                                </button></a>
                            </td>
                        <tr>
                            <td colspan="9">
                                <hr>
                            </td>
                        </tr>

                    <?php

                 $count++;
                 
                }

                 ?>

            </tr>
        </table>
    </section>
</body>
</html>
