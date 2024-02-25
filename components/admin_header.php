<header>
    <div class="logo">
        <img src="../image/logo.png" width="200">
    </div>
    <div class="right">
        <div class="bx bxs-user" id="user-btn"></div>
        <div class="toggle-btn"><i class="bx bx-menu"></i></div>
    </div>
    <div class="profile">
      <?php
        $seller_profile = $conn->prepare("SELECT * FROM `sellers` WHERE id = ?");
        $seller_profile->execute([$seller_id]);

        if ($seller_profile->rowCount() > 0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        
      ?>
      <div class="profile">
        <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" class="logo-img" width="100">
      </div>
      <p><?= $fetch_profile['name']; ?></p>
      <div class="flex-btn">
        <a href="profile.php" class="btn">Profile</a>
        <a href="../components/admin_logout.php" onclick="return confirm('logout fropm this website?');" class="btn">Logout</a>
      </div>
      <?php } ?>
    </div>
</header>
<div class="sidebar-container">
    <div class="sidebar">

    </div>
</div>