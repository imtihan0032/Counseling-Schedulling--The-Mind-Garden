<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php 

?>
<title>Online Community</title>
<script src="js/comments.js"></script>

	<div class="container">
				
		<h2>Share Your Thoughts With Us </h2>
			
		<br>		
		<form method="POST" id="commentForm">
			<div class="form-group">
				<input type="text" name="name" id="name" class="form-control" placeholder="Enter your username" required />
			</div>
			<div class="form-group">
				<textarea name="comment" id="comment" class="form-control" placeholder="Share your thoughts in 100 words" rows="5" required></textarea>
			</div>
			<span id="message"></span>
			<br>
			<div class="form-group">
				<input type="hidden" name="commentId" id="commentId" value="0" />
				<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add Post" />

			</div>
			<div class="form-group">
    <a href="onlinecommunity_patient.php" class="btn btn-secondary">Back</a>
</div>
		</form>		
		<br>
		<div id="showComments"></div>   
</div>	

<footer>
<p>Copyright The Mind Garden © 2023 - All Rights Reserved</p>
    <div class="footer-links">
      
      <a href="https://github.com/imtihan0032">Contact Us</a>
    </div>
</footer>
</body>



<style>
	body {
    background-image: url("bgoc.jpg");
}

h2 {
    text-align: center;
    margin-bottom: 30px;
	margin-top: 30px;
	color: #01735C;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}

#commentForm {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 5px 5px 10px #ccc;
    margin-bottom: 30px;
}

#commentForm textarea {
    resize: none;
	margin-top: 10px;
}

#showComments {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px #ccc;
}

.comment-box {
    padding: 10px;
    margin-bottom: 10px;
    background-color: #ADD8E6;
    border-radius: 5px;
}

.comment-box .name {
    font-weight: bold;
    margin-bottom: 5px;
}

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

#submit {
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 5px;
    transition: all 0.2s ease-in-out;
}

#submit:hover {
    background-color: #3f51b5;
    color: #fff;
    cursor: pointer;
}
.btn-secondary{
    margin-left: 10px;
	margin-top: 10px;
	background-color: #097969;
	width: 80px;
}

</style>


