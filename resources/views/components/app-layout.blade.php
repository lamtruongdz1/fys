<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @isset($title){{ $title }}@endisset  - Find Yard Sport 
    </title>
    <!-- css -->
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/style.css')}}" />
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
          <a href="/"><img src="{{asset ('frontend/images/logo.png')}}" alt="" /></a>
        </div>
        <ul class="menu">
          <li><a href="/">trang chủ</a></li>
          <li><a href="/san">Đặt sân</a></li>
          <li><a href="">Sân hot</a></li>
          <li><a href="">Dịch vụ</a></li>
          <li><a href="">Liên hệ</a></li>
        </ul>
        <div class="login">
          <a href="/login">đăng nhập</a>
          <a href="/register">đăng ký</a>
        </div>
        <div id="menuBar" class="icons bx bx-menu"></div>
      </div>
    </header>
    <!-- header end -->
{{ $slot }}


    <!-- section start -->
    <!-- end section -->
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
            <img src="{{asset ('frontend/images/mastercard.png')}}" alt="">
            <img src="{{asset ('frontend/images/visa.png')}}" alt="">
            <img src="{{asset ('frontend/images/discover.png')}}" alt="">
            <img src="{{asset ('frontend/images/momo.png')}}" alt="">
          </div>
          <div class="footer-item">
           <img src="{{asset ('frontend/images/logo.png')}}" alt="">
          </div>
        </div>
    </footer>
    <!-- footer section end -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="{{ asset('frontend/js/main.js')  }}"></script>
    <script src="{{ asset('frontend/js/slider.js')  }}"></script>
  </body>
</html>
