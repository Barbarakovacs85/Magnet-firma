<?php
include '../components/connect.php';

if (isset($_COOKIE['sELLER_ID'])) {
    $seller_id = $_COOKIE['seller_id'];
    }else{
        $seller_id = '';
        header('location:login.php');
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
    <!-- --------------box icon cdn link ------------------------ -->
    <link rel="stylesheet" href='http://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>
</head>
<body>
    
<div class="main-container">
<?php
include '../components/admin_header.php'; ?> 

</div>
</body>
<!-- ------------------sweatalert cnd link------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="../js/script.js"></script>
<?php
include '../components/alert.php';
?>

</body>
</html>