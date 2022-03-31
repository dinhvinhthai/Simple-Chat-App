<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users_page.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Simple Chat App</header>
      <form action="php/login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Tên đăng nhập</label>
          <input type="text" id="usename" name="username" placeholder="Nhập tên đăng nhập của bạn." value="thai" required>
        </div>
        <div class="field input">
          <label>Mật khẩu</label>
          <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn." value="123456" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Đăng nhập">
        </div>
      </form>
      <div class="link">Chưa có tài khoản? <a href="signup_page.php">Tạo ngay.</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>