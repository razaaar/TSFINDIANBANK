<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <title>CREATE USER</title>
    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">

</head>

<body style="background-color: #82E0AA;">
    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "INSERT INTO  users(name,email,balance) VALUES ('{$name}' ,'{$email}','{$balance}')";
       // header('location:createuser.php');
        $result = mysqli_query($conn,$sql);
        if ($result) {
                    echo "<script> alert('hurraay! user created');
                                window.location='transfermoney.php';
                            </script>";
        }
    }
    ?>

    <?php
        include 'navbar.php';
    ?>

    <h2 class="text-center pt-4" style="color: black; padding:20px; "> CREATE A USER </h2>
    <br>

    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="Screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="Screen-header-ellipsis"></div>
                    </div>
                </div>

                <div class="screen-body text-center" style="padding: 5px;">
                    <div class="Screen-body-item left">
                        <img class="img-fluid" src="image/img22.png" style="border: none ;border-radius:30% ;padding-bottom: 30px;" >
                    </div>
                    <div class="screen-body-item">
                        <form class="app-form" method="post" style="padding: 20px;">
                            <div class="app-form-group" style="padding: 5px;">
                                <input class="app-form-control" placeholder="Name " type="text" name="name" required>
                            </div>
                            <div class="app-form-group"style="padding: 5px;">
                                <input class="app-form-control" placeholder="Email" type="email" name="email" required>
                            </div>
                            <div class="app-form-group "style="padding: 5px;">
                                <input class="app-form-control" placeholder="Balance" type="number" name="balance" required>
                            </div>
                            <br>
                            <div class="app-form-group button">
                                <input class="app-form-button btn-primary" type="submit" value="CREATE" name="submit"></input>
                                <input class="app-form-button btn-primary" type="reset" value="RESET" name="reset"></input>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <footer class="text-center mt-5 py-5" style="background-color:firebrick ; color:white;">
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