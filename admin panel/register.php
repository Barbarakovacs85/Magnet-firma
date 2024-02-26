<?php
include '../components/connect.php';

if (isset($_POST['submit'])) {

    $id = unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $cpass = sha1($_POST['cpass']);
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);
   
    $select_seller = $conn->prepare("SELECT * FROM `sellers` WHERE email = ?");
    $select_seller->execute([$email]);

    if ($select_seller->rowCount() > 0){
        $warning_msg[] = 'email already exists!';
    } else {
        if($pass != $cpass){
            $warning_msg[] = 'confirm password not matched';
        } else {
            $insert_seller = $conn->prepare("INSERT INTO `sellers`(id, name, email, password) VALUES(?, ?, ?, ?)");
            $insert_seller->execute([$id, $name, $email, $cpass]);
            $succes_msg[] = 'new seller registered! Please login now';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbi Magnet</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <!-- ---------------font awesome cdn link------------------  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                        <input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">
                    </div>
                </div>
                <div class="col">
                    <div class="input-field">
                        <p>your password<span>*</span></p>
                        <input type="password" name="pass" placeholder="enter your password" maxlength="50" required class="box">
                    </div>
                    <div class="input-field">
                        <p>confirm password<span>*</span></p>
                        <input type="password" name="cpass" placeholder="confirm your password" maxlength="50" required class="box">
                    </div>
                </div>
            </div>
           
                <p class="link">Alredy have an account?<a href="login.php">Login now</a></p>
                <input type="submit" name="submit" value="register now" class="btn">
        </form>
    </div>








<!-- ------------------sweatalert cnd link------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="../js/script.js"></script>

<?php
include '../components/alert.php';
?>
</body>
</html>