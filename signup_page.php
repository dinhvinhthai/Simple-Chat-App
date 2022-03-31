<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users_page.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="php/signup.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
          <div class="field input">
            <label>Tên hiển thị:</label>
            <input type="text" name="fullname" placeholder="Nhập tên hiển thị." required>
        </div>
        <div class="field input">
          <label>Tên đăng nhập:</label>
          <input type="text" name="username" placeholder="Nhập tên đăng nhập." required>
        </div>
        <div class="field input">
          <label>Mật khẩu</label>
          <input type="password" name="password" placeholder="Nhập mật khẩu." required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input">
          <label>Nhập lại mật khẩu</label>
          <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu." required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Nhập ảnh đại diện</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Đăng ký">
        </div>
      </form>
      <div class="link">Đã có tài khoản? <a href="login_page.php">Đăng nhập ngay.</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
