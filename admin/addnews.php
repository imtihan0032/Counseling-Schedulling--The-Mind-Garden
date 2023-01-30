<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/addbooks.css">
    <title>Manage News and Events</title>
    
</head>

<?php
@include '../connection.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_link = $_POST['product_link'];
   $product_image = $_FILES['product_image']['name'];   
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = '';
   }else{
      $insert = "INSERT INTO news(name, price, image, link) VALUES('$product_name', '$product_price', '$product_image','$product_link' )";
      $upload = mysqli_query($database,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = '';
      }else{
         $message[] = '';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($database, "DELETE FROM products WHERE id = $id");
   header('location:addnews.php');
};
?>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}
?>

<body>

<div class="container">
    <?php require_once(__DIR__.'/navbar.php'); ?>
    <div class="dash-body">
        <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;margin-top:25px; ">
            <tr >
                <td width="5%" >
                <a href="schedule.php" ><button  class="login-btn btn-primary-soft btn btn-icon-back"  style="padding-top:11px;padding-bottom:11px;margin-left:20px;width:125px"><font class="tn-in-text">Back</font></button></a>
                </td>
                <td>
                    <p style="font-size: 23px;padding-left:12px;font-weight: 600;">Add Ongoing or Upcoming News and Events</p>                          
                </td>  
            </tr>
            
            <tr>
                <td colspan=2>
                    <div  class="dashboard-items search-items"  >
                    
                        <div style="width:100%;">
                        

                        <div class="container">

<div class="admin-product-form-container">

   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      <h3>Please Fill in the Required Information</h3>
      <input type="text" placeholder="Enter the news or event title" name="product_name" class="box">
      <input type="text" placeholder="Add some details about the news or event " name="product_price" class="box">
      <input type="file" placeholder="Add a news or event cover" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
      <input type="text" placeholder="Add a link " name="product_link" class="box">
      <input type="submit" class="btn1" name="add_product" value="Add">
   </form>

</div>

<?php

$select = mysqli_query($database, "SELECT * FROM news");

?>
<div class="product-display">
   <table class="product-display-table">
      <thead>
      <tr>
         <th>Image</th>
         <th>Event Title</th>
         <th>Details and Timing</th>
         <th>Link</th>
         <th>Action</th>
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['price']; ?></td>
         <td><?php echo $row['link']; ?></td>
         
         <td>
            <a href="updatenews.php?edit=<?php echo $row['id']; ?>" class="btn2"> <i class="fas fa-edit"></i> Edit </a>
            <a href="addnews.php?delete=<?php echo $row['id']; ?>" class="btn2"> <i class="fas fa-trash"></i> Delete </a>
         </td>
      </tr>
      
   <?php } ?>
   </table>
</div>

</div>
</div>
</div>
</div>
</div>

</body>


</html>
