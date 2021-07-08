<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/createuser.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Create User</title>
    <link rel="shortcut icon" type="image"  href="img/title.jpg">
</head>
<body>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email_id=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email_id,balance) values('{$name}','{$email_id}','{$balance}')";
    $result=mysqli_query($con,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
    <?php
        include 'navbar.php';
    ?>
    <body class="body">
<div class="login-box">
    <h1 align="center">Create User</h1>
    <form method="post">
	<div class="textbox">
		<i class="fas fa-user"></i>
		<input type="text" name="name" placeholder="NAME" required/>
	</div>	
	<div class="textbox">
		<i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="EMAIL" required/>
	</div>
    <div class="textbox">
		<i class="fas fa-rupee-sign"></i>
        <input type="number" name="balance" placeholder="BALANACE" required/>
	</div>			
     <input type="submit" class="btn" name="submit" value="CREATE" />
     <input type="submit" class="btn" name="reset" value="RESET"/>
    </form>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>