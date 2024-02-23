<?php
include ' ../components/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbi Magnet</title>
    <link rel="stylesheet" href="http://cndjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data" class="register">
            <h3>Register now</h3>
            <div class="flex">
                <div class="col">
                    <div class="input-field">
                        <p>your name<span>*</span></p>
                        <input type="text" name="name" placeholder="enter your name" maxlength="50" required class="box">
                    </div>
                    <div class="input-field">
                        <p>your email<span>*</span></p>
                        <input type="text" name="email" placeholder="enter your email" maxlength="50" required class="box">
                    </div>
                </div>
                <div class="col">
                    <div class="input-field">
                        <p>your password<span>*</span></p>
                        <input type="password" name="password" placeholder="enter your password" maxlength="50" required class="box">
                    </div>
                    <div class="input-field">
                        <p>confirm password<span>*</span></p>
                        <input type="password" name="cpass" placeholder="confirm your password" maxlength="50" required class="box">
                    </div>
                </div>
                <div class="input-field">
                        <p>your profile<span>*</span></p>
                        <input type="file" name="image" accept="image/*" required class="box">
                </div>
                <p class="link">Alredy have n account?<a href="login.php">Login now</a></p>
                <input type="submit" name="submit" value="register now" class="btn">
            </div>
        </form>
    </div>








<!-- ------------------sweatalert cnd link------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="../js/script.js"></script>

<?php
include ' ../components/connect.php';
?>
</body>
</html>