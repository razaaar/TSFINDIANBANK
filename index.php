<!DOCTYPE html>
<html lang="en">

<head>

    <!--required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width =device-width ,initial-scale =1, shrink-to-fit-no">

    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>Basic Banking System </title>

</head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <!-- intro section -->
        <div class="row intro py-1" style="background-color :#82E0AA ;">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h2>Welcome to </h2>
                    <h1>INDIAN ONLINE BANK</h1>
                </div>
            </div>
                <div class="col-sm-12 col-md img text-center">
                    <img src="image/img17.png" class="img-fluid pt-2" style="border-radius: 50%;">
                </div>
        </div>

        <!-- ACTIVITY SECTION -->
            <div class="row activity text-center">
                <div class="col-md act">
                    <img src="image/img22.png" class="img-fluid" style="padding: 5px;">
                    <br>
                    <a href="createuser.php"><button class="btn-success" >Create a user </button>
                </div>

                <div class="col-md act">
                    <img src="image/img24.png" class="img-fluid" style="border-radius: 70%; padding:2px;">
                    <br>
                    <a href="transfermoney.php"><button class="btn-primary">Make a Transactions </button>
                </div>

                <div class="col-md act">
                    <img src="image/img28.png" class="img-fluid" style="background-color:blue; width:46%;height:auto;border-radius:30%;">
                    <br>
                    <a href="transactionhistory.php"><button class="btn-danger">Transaction History</button>
                </div>

            </div>
    </div>
    <footer class="text-center mt-5 py-10%" style="background-color: black ; color:white; padding:5%; bottom:0px; height:15px;">
        <a style="padding: 1px; text-decoration:none;">Copyright |made by <br>
        <b>@AASIF RAZAA |THE SPARK FOUNDATION INTERN</b> </a>
    </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>