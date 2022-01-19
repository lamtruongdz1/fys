<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <!-- effect -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!-- header start -->
    <header class="header" id="header">
      <div class="navbar">
        <div class="logo">
          <a href=""><img src="images/logo.png" alt="" /></a>
        </div>
        <ul class="menu">
          <li><a href="index.html">trang chủ</a></li>
          <li><a href="yard.html">Đặt sân</a></li>
          <li><a href="">Sân hot</a></li>
          <li><a href="">Dịch vụ</a></li>
          <li><a href="">Liên hệ</a></li>
        </ul>
        <div class="login">
          <a href="">đăng nhập</a>
          <a href="">đăng ký</a>
        </div>
        <div id="menuBar" class="icons bx bx-menu"></div>
      </div>
    </header>
    <!-- header end -->
    <section class="yard-login">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button onclick="login()" type="button" class="toggle-btn" >Đăng nhập</button>
                <button onclick="register()" type="button" class="toggle-btn">Đăng ký</button>
            </div>
            <div class="social-icons">
                <img src="images/fb.png" alt="">
                <img src="images/tw.png" alt="">
                <img src="images/ig.png" alt="">
            </div>
            <form action="" id="login" class="input-group">
                <input type="text" class="input-field" placeholder="tên đăng nhập" required> 
                <input type="text" class="input-field" placeholder="nhập mật khẩu" required> 
                <input type="checkbox" class="checkbox"><span>nhớ mật khẩu</span> 
                <button type="submit" class="submit-btn">đăng nhập</button>
            </form>
            <form action="" id="register" class="input-group">
                <input type="text" class="input-field" placeholder="tên đăng nhập" required> 
                <input type="text" class="input-field" placeholder="email" required> 
                <input type="text" class="input-field" placeholder="nhập mật khẩu" required> 
                <input type="checkbox" class="checkbox"><span>Khi đăng ký tài khoản, bạn đồng ý với Chính sách bảo mật và điều khoản sử dụng</span> 
                <button type="submit" class="submit-btn">đăng nhập</button>
            </form>
        </div>
    </section>
    <!-- footer section start -->
    <footer class="footer" id="footer">
      <div class="footer-list">
        <div class="footer-item">
          <h2>find yard Sport</h2>
          <ul>
            <li><a href="">Giới thiệu FYS</a></li>
            <li><a href="">BLog</a></li>
            <li><a href="">Điều khoản sử dụng</a></li>
            <li><a href="">Chính sách bảo mật</a></li>
          </ul>
        </div>
        <div class="footer-item">
          <h2>THÔNG TIN LIÊN HỆ</h2>
          <ul>
            <li><a href=""><i class='bx bxl-facebook-circle'></i>findyardsport</a></li>
            <li><a href=""><i class='bx bxl-gmail' ></i>findyardsport@gmail.com</a></li>            
          </ul>
        </div>
        <div class="footer-item">
          <h2>THANH TOÁN</h2>
          <img src="images/mastercard.png" alt="">
          <img src="images/visa.png" alt="">
          <img src="images/discover.png" alt="">
          <img src="images/momo.png" alt="">
        </div>
        <div class="footer-item">
         <img src="images/logo.png" alt="">
        </div>
      </div>
    </footer>
    <!-- footer section end -->
    <script>
        // login
        var x = document.getElementById("login")
        var y = document.getElementById("register")
        var z = document.getElementById("btn")

        function register() {
            x.style.left = "-40rem"
            y.style.left = "5rem"
            z.style.left = "11rem"
        }
        function login() {
            x.style.left = "4rem"
            y.style.left = "45rem"
            z.style.left = "0"
        }
    </script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="js/main.js"></script>
    <script src="js/sldier.js"></script>
  </body>
</html>
