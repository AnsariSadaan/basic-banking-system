<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Noor Bank</title>
    <link rel="shortcut icon" type="image" href="img/title.jpg">
</head>
<body>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email_id=$_POST['email'];
    $message=$_POST['message'];
    $sql="insert into contact_form(first_name, last_name, email_id, message) values ('{$first_name}','{$last_name}','{$email_id}','{$message}')";
    $result=mysqli_query($con,$sql);
    if($result){
               echo "<script> alert('Your Response is Submitted!');
                               window.location='contact.php';
                     </script>";
                    
    }
  }
?>
    <?php
    include 'navbar.php';
    ?>
    <form method="POST" class="contact">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="head text-center text-white py-3">
                                        <h3>Contact Us</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="form p-3">
                                <div class="form-row my-4">
                                    <div class="col-lg-6">
                                        <input type="text" class="effect" name="first_name" placeholder="FIRST NAME" required>
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="effect" name="last_name" placeholder="LAST NAME" required>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="form-row pb-4">
                                    <div class="col-lg-12">
                                    <input type="text" class="effect" name="email" placeholder="EMAIL ADDRESS" required>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="form-row pt-5">
                                    <div class="col-lg 12">
                                    <input type="text" class="effect" name="message" placeholder="YOUR MESSAGE" required>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="form-row pt-4">
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" class="btn" name="submit" value="SUBMIT">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>