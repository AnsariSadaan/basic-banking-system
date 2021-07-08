<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Noor Bank</title>
    <link rel="shortcut icon" type="image" href="img/title.jpg">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3>Welcome to</h3>
                    <h1>Noor Bank</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-0">
            </div>
        </div>

        <!-- Activity section -->
        <div class="row activity text-center pt-4 mb-5">
            <div class="col-md act">
                <img src="img/user.png" class="img-fluid">
                <br>
                <a href="createuser.php"><button>Create a User</button></a>
            </div>
            <div class="col-md act">
                <img src="img/transfer.png" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button>Make a Transaction</button></a>
            </div>
            <div class="col-md act">
                <img src="img/history.png" class="img-fluid">
                <br>
                <a href="transhistory.php"><button>Transaction History</button></a>
            </div>
            
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>