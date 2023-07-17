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
    <link rel="stylesheet" href="../CSS/history.css">
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
                <a href="try.php">
                    <li id="">PENDING PATIENT</li>
                </a>
                <a href="">
                    <li>PATIENT'S HISTORY</li>
                </a>
                </a>
                <a href="index.php">
                    <li>LOG-OUT</li>
                </a>
            </ul>
        </div>
    </header>
        
    <section>
        <form 
        method="POST">
        
            <table width="79.9%" cellpadding="0" cellspacing="0" id="main">
                <tr>
                    <td colspan="9" align="center" id="title">List of Patient</td>
                </tr>
                <tr> 
                    <td colspan="9">
                        <input type="search" name="searchname" id="" placeholder="Search patient history">
                    </td>
                </tr>
                <tr> 
                    <td colspan="9" align="end">
                        <button name="search">search</button>
                    </td>
                </tr>
                <tr align="center" id="head">
                    <td>ID NO.</td>
                    <td>LASTNAME</td>
                    <td>FIRSTNAME</td>
                    <td>AGE</td>
                    <td>BIRTHDAY</td>
                    <td>ADDRESS</td>
                    <td>CONTACT</td>
                </tr>         
                    <tr>
                        <td colspan="9"><hr></td>
                    </tr>
                    <?php
                        $count = 1;
                        if (isset($_POST['search'])){
                            # code...
                            $search = $_POST['searchname'];
                            $data = "SELECT * FROM patient WHERE lastname like '%".$search."%' ";
                        }else{
                            $data = "SELECT * FROM patient";
                        }
                        
                        // $count = 1;
                        // $data = "SELECT * FROM patient ";
                        $rows = mysqli_query($conn, $data);
                        while ($rs =mysqli_fetch_array($rows)) {
                    ?>
                    
        </form>
                    <tr align="center" id="data">
                        <td>
                            <?php echo $rs['user_id']?>
                        </td>
                        <td>
                            <?php echo $rs['lastname']?>
                        </td>
                        <td>
                            <?php echo $rs['firstname'] ?>
                        </td>
                        <td>
                            <?php echo $rs['age'] ?>
                        </td>
                        <td>
                            <?php echo $rs['birthday'] ?>
                        </td>
                        <td>
                            <?php echo $rs['address'] ?>
                        </td>
                        <td>
                            <?php echo $rs['contact'] ?>
                        </td>
                        <td  align="end" >
                            <Button>
                                <a href="patient_history.php?id=<?php echo $rs['user_id']?>">
                                VIEW  
                                </a>
                            </Button>
                        </td>
                        <td colspan="9">
                            <hr>
                        </td>
                    </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                
                        <?php
                    $count++; 
                    }
                    ?>
            </table>

    </section>
</body>
</html>




