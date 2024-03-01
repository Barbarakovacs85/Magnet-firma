<?php
include '../components/connect.php';

if (isset($_POST['submit'])) {

    $warning_msg = array(); 
    $success_msg = array(); 

    $id = unique_id();

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);


    if(strlen($name) < 4) {
        $warning_msg[] = 'A név legalább 4 karakter hosszú kell legyen!';
    }

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $warning_msg[] = 'Az e-mail cím érvénytelen!';
    }

    $pass = $_POST['pass'];

    
    if(strlen($pass) < 4) {
        $warning_msg[] = 'A jelszó legalább 4 karakter hosszú kell legyen!';
    }

   
    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $pass)) {
        $warning_msg[] = 'A jelszónak legalább egy nagybetűt, egy számot és legalább 8 karaktert kell tartalmaznia!';
    }

    $pass = sha1($pass);

    $cpass = $_POST['cpass'];
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $cpass = sha1($cpass);

    
    if($pass != $cpass){
        $warning_msg[] = 'A jelszavak nem egyeznek!';
    }

   
    if (!empty($warning_msg)) {
        
        foreach ($warning_msg as $msg) {
            echo "<p>$msg</p>";
        }
    } else {
        
        $image = $_FILES['image']['name'];
        $image = filter_var($image, FILTER_SANITIZE_STRING);
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        $rename = unique_id().'.'.$ext;
        $image_tmp_name= $_FILES['image']['tmp_name'];
        $image_folder = '../uploaded_files/'.$rename;

        $select_seller = $conn->prepare("SELECT * FROM `sellers` WHERE email = ?");
        $select_seller->execute([$email]);

        if ($select_seller->rowCount() > 0){
            $warning_msg[] = 'Ez az e-mail cím már regisztrálva van!';
            
            foreach ($warning_msg as $msg) {
                echo "<p>$msg</p>";
            }
        } else {
           
            $insert_seller = $conn->prepare("INSERT INTO `sellers`(id, name, email, password, image) VALUES(?, ?, ?, ?,?)");
            $insert_seller->execute([$id, $name, $email, $cpass, $rename]);
            move_uploaded_file($image_tmp_name, $image_folder);
            $success_msg[] = 'Az új eladó regisztrálva lett! Kérjük, jelentkezzen be most.';
           
            echo "<p>{$success_msg[0]}</p>";
            header("refresh:3;url=login.php");
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
                <div class="input-field">
                    <p>your profile<span>*</span></p>
                    <input type="file" name="image" accept="image/*" require class="box">
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