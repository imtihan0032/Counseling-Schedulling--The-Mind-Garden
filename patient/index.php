<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
        
    <title>Home Page</title>
    
</head>
<body>
    <?php

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='p'){
            header("location: ../login.php");
        }else{
            $useremail=$_SESSION["user"];
        }

    }else{
        header("location: ../login.php");
    }
    

    //import database
    include("../connection.php");
    $userrow = $database->query("select * from patient where pemail='$useremail'");
    $userfetch=$userrow->fetch_assoc();
    $userid= $userfetch["pid"];
    $username=$userfetch["pname"];


    //echo $userid;
    //echo $username;
    
    ?>
    <div class="container">
    <?php require_once(__DIR__.'/navbar.php'); ?>
        <div class="dash-body" style="margin-top: 15px">
            <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;" >
                        
                        <tr >
                            
                            <td colspan="1" class="nav-bar" >
                            
                          
                            </td>
                            <td width="25%">

                            </td>
                            <td width="15%">
                            
                                <p class="heading-sub12" style="padding: 0;margin: 0;">
                                    <?php 
                                date_default_timezone_set('Asia/Kolkata');
        
                                $today = date('Y-m-d');
                                echo $today;


                                $patientrow = $database->query("select  * from  patient;");
                                $doctorrow = $database->query("select  * from  doctor;");
                                $appointmentrow = $database->query("select  * from  appointment where appodate>='$today';");
                                $schedulerow = $database->query("select  * from  schedule where scheduledate='$today';");


                                ?>
                                </p>
                            </td>
                            <td width="10%">
                                <button  class="btn-label"  style="display: flex;justify-content: center;align-items: center;"><img src="../img/calendar.svg" width="100%"></button>
                            </td>
        
        
                        </tr>
                <tr>
                    <td colspan="4" >
                        
                    <center>
                    <table class="filter-container doctor-header patient-header" style="border: none;width:95%" border="0" >
                    <tr>
                        <td >
                            <h3>Welcome to the Mind Garden.</h3>
                            <h1><?php echo $username  ?>.</h1>
                            <p>We are thrilled to have you here. We are dedicated to providing a comprehensive online platform for all of your mental healthcare needs. Here, you can easily check your doctor's schedule, book an appointment, and even join our online community for support and resources. Additionally, our website features a self-help section with a variety of books, music, and podcasts to enhance your mental health. You can also stay informed on the latest mental health news and events happening in your area. Thank you for visiting and we hope you find our website to be a valuable resource on your journey to wellness.
                            </p>
                            
                            <h3>Search For a Doctor</h3>
                            <form action="schedule.php" method="post" style="display: flex">

                                <input type="search" name="search" class="input-text " placeholder="Enter doctor name to view available sessions" list="doctors" style="width:45%;">&nbsp;&nbsp;
                                
                                <?php
                                    echo '<datalist id="doctors">';
                                    $list11 = $database->query("select  docname,docemail from  doctor;");
    
                                    for ($y=0;$y<$list11->num_rows;$y++){
                                        $row00=$list11->fetch_assoc();
                                        $d=$row00["docname"];
                                        
                                        echo "<option value='$d'><br/>";
                                        
                                    };
    
                                echo ' </datalist>';
    ?>
                                
                           
                                <input type="Submit" value="Search" class="login-btn btn-primary btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">
                            
                            <br>
                            <br>
                            
                        </td>
                    </tr>
                    </table>
                    </center>

                    
                </td>
                </tr>

                <div></div>

                                            </tbody>
                
                                        </table>
                                        </div>
                                        </center>
                                </td>
                            </tr>
                        </table>
                    </td>
                <tr>
            </table>
        </div>
    </div>

    <footer> 
    <p>Copyright The Mind Garden © 2023 - All Rights Reserved</p>
    <div class="footer-links">
      
      <a href="https://github.com/imtihan0032">Contact Us</a>
    </div>
</footer>
</body>

<style>
    footer{
    background-color: #277BC0;
    margin-top: 150px;
    height: 100px;
    color: white;
    text-align: center;
    padding:10px;
}
.footer-links {
    margin-top: 10px;
}

.footer-links a {
    color: #fff;
    text-decoration: none;
    margin-right: 10px;
}
.footer-links a:hover {
    color: #28DE83;
}
</style>
</html>