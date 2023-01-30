<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
        
    <title>Self Help Music</title>

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
                    <p style="font-size: 23px;padding-left:12px;font-weight: 600; color: #0A76D8">Music</p>
                    <p style="font-size: 15px;padding-left:12px;font-weight: 600; color: #1969AA">We have a curated selection of music designed to promote relaxation, reduce anxiety, and improve overall well-being.</p>
                    
                                       
                </td>
                
                <td width="10%">
                    
                </td>
            </tr>
            
            <tr>
                <td>

                </td>
                <td colspan=2>
                    <div  class="dashboard-items search-items"  >
                    
<div class = "card-container" style="width:100%;">

                        
    <?php
    @include '../connection.php';
        $query = "SELECT * FROM music";
        $result = mysqli_query($database, $query);
        while($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="card">
            <img src="../admin/uploaded_img/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
            <h2><?php echo $row['name']; ?></h2>
            <p style="color: black; font-size: 14px;"><?php echo $row['price']; ?></p>
            <a href="<?php echo $row['link']; ?> ">Listen Now</a>
        </div>
    <?php } ?>
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
.card-container {
    display: flex;
    flex-wrap: wrap;
    

}

.card {
    width: 250px;
    margin: 30px;
    padding: 16px;
    box-shadow: 2px 2px 8px #ccc;
    text-align: left;
    
}

.card img {
    width: 100%;
    height: 350px;
    height: 200px;

}
a {
    text-decoration: none;
    color: #4169e1;
}
a:hover {
  color: #28DE83;
}

footer{
    background-color: #277BC0;
    margin-top: 400px;
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