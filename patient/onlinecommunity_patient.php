<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
	
    <title>Online Community</title>
    
    <?php
    @include '../connection.php';

    
    ?>
</head>
<body>
    
<div class="container">
    <?php require_once(__DIR__.'/navbar.php'); ?>
    <div class="dash-body">
        <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;margin-top:25px; ">
            <tr >
                <td width="13%" >
                <a href="schedule.php" ><button  class="login-btn btn-primary-soft btn btn-icon-back"  style="padding-top:11px;padding-bottom:11px;margin-left:20px;width:125px"><font class="tn-in-text">Back</font></button></a>
                </td>
                <td>
                    <p style="font-size: 23px;padding-left:12px;font-weight: 600;">Online Community</p>
                                       
                </td>
                
                <td width="10%">
                    <button  class="btn-label"  style="display: flex;justify-content: center;align-items: center;"><img src="../img/calendar.svg" width="100%"></button>
                </td>
            </tr>
            
            <tr>
                <td>

                </td>
                <td colspan=2>
                <div class="dashboard-items search-items" style="width:95%; background-image: url('bgoc.jpg'); height: 600px; margin: 0px;">
                <p style="font-size:40px; color:#097969; margin-top: 200px; margin-left: 150px; font-family: 'Helvetica' font-weight: bold;">Welcome to The Online Community</p>

                <a href="forum.php" >
    <input type="button" value="Join The Discussion" class="login-btn btn-primary btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px; background-color: #097969; border-color: transparent; margin-top: 280px; margin-left: -450px;">
                </a>

            
            </div>

</div>



    </div>

    
                                
                    </div>
                </td>
            </tr>

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
    .login-btn:hover {
    background-color: #054f4c;
}

footer{
    background-color: #277BC0;
    margin-top: 200px;
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