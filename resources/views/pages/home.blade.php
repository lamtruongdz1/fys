<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Yard Sport</title>
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
          <a href=""><img src="{{asset ('frontend/images/logo.png')}}) }}" alt="" /></a>
        </div>
        <ul class="menu">
          <li><a href="/">trang chủ</a></li>
          <li><a href="yard.html">Đặt sân</a></li>
          <li><a href="">Sân hot</a></li>
          <li><a href="">Dịch vụ</a></li>
          <li><a href="">Liên hệ</a></li>
        </ul>
        <div class="login">
          <a href="login.html">đăng nhập</a>
          <a href="register.html">đăng ký</a>
        </div>
        <div id="menuBar" class="icons bx bx-menu"></div>
      </div>
    </header>
    <!-- header end -->
    <!-- section about start -->
    <section class="booking-bar">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="banner-image swiper-slide">
            <img src="{{asset ('frontend/images/banner1.png')}}" alt="" />
          </div>
          <div class="banner-image swiper-slide">
            <img src="{{asset ('frontend/images/banner2.png')}}" alt="" />
          </div>
          <div class="banner-image swiper-slide">
            <img src="{{asset ('frontend/images/banner3.png')}}" alt="" />
          </div>
        </div>
      </div>
      <div class="booking-list" >
        <div class="booking-item" data-aos="fade-up"  data-aos-duration="1000">
          <div class="booking-content" >
            <h1>Football Yard System</h1>
            <h3>Tìm đối thủ nhanh chóng - <span>Uy tín - Chất lượng</span></h3>
            <p class="btn">cáp kèo ngay</p>
          </div>
          <div class="booking-bar-form">
            <div class="input-name form-group">
              <input
                type="text"
                name=""
                id=""
                placeholder="tên quận hoặc tên sân bóng"
                class="form-control"
              />
            </div>
            <div class="input-date form-group">
              <input
                type="date"
                name=""
                id=""
                placeholder="11/01/2022"
                class="form-control"
              />
            </div>
            <div class="input-time form-group">
              <input
                type="time"
                name=""
                id=""
                placeholder="10:30"
                class="form-control"
              />
            </div>
            <div class="input-btn">
              <a href="yard.html"><input type="submit" class="btn" value="tìm kiếm" /></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->
    <!-- yard section start -->
    <section class="category" id="category">
      <div class="category-heading" data-aos="fade-up"
      data-aos-duration="1000">
        <div class="heading-title">
          <h1 class="heading-title">Tìm sân <span>theo quận</span></h1>
        </div>
        <div class="heading-title-all">
          <a href="yard.html"><h2 class="heading-title-all">xem tất cả</h2></a>
          <i class='bx bx-chevrons-right'></i>
        </div>
      </div>
      <div class="category-list swiper" data-aos="fade-left"  data-aos-duration="1000">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="category-item">
              <img src="{{asset ('frontend/images/san1.jpg')}}" alt="" class="category-img">
              <div class="category-text">
                <h2 class="category-title">Quận 1</h2>
                <p class="count">2 sân</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-item">
              <img src="{{asset ('frontend/images/san2.jpg')}}" alt="" class="category-img">
              <div class="category-text">
                <h2 class="category-title">Quận bình thạnh</h2>
                <p class="count">5 sân</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-item">
              <img src="{{asset ('frontend/images/san3.jpg')}}" alt="" class="category-img">
              <div class="category-text">
                <h2 class="category-title">Quận tân bình</h2>
                <p class="count">10 sân</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-item">
              <img src="{{asset ('frontend/images/san4.jpg')}}" alt="" class="category-img">
              <div class="category-text">
                <h2 class="category-title">Quận gò vấp</h2>
                <p class="count">2 sân</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-item">
              <img src="{{asset ('frontend/images/san5.jpg')}}" alt="" class="category-img">
              <div class="category-text">
                <h2 class="category-title">Quận 5</h2>
                <p class="count">2 sân</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-item">
              <img src="{{asset ('frontend/images/san6.jpg')}}" alt="" class="category-img">
              <div class="category-text">
                <h2 class="category-title">Quận 3</h2>
                <p class="count">2 sân</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-item">
              <img src="{{asset ('frontend/images/san7.jpg')}}" alt="" class="category-img">
              <div class="category-text">
                <h2 class="category-title">Quận 2</h2>
                <p class="count">2 sân</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-item">
              <img src="{{asset ('frontend/images/san8.jpg')}}" alt="" class="category-img">
              <div class="category-text">
                <h2 class="category-title">Quận 7</h2>
                <p class="count">2 sân</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- yard section end -->
    <!-- yard hot section start-->
    <section class="yard-hot" id="yard-hot">
      <div class="yard-hot-heading" data-aos="fade-up"
      data-aos-duration="1000">
        <div class="heading-title">
          <h1 class="heading-title">Sân nhiều <span>người đặt</span></h1>
        </div>
        <div class="heading-title-all">
          <h2 class="heading-title-all">xem tất cả</h2>
          <i class='bx bx-chevrons-right'></i>
        </div>
      </div>
      <div class="yard-hot-list swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="yard-hot-item">
              <div class="yard-hot-image">
                <img src="{{asset ('frontend/images/chaolua.jpg')}}" alt="" class="yard-img">
              </div>
              <div class="yard-hot-text">
                <div class="yard-hot-type">
                  <span>Sân 5 - sân 7</span>
                </div>
                <div class="yard-hot-price">
                  <p>250.000 VND/giờ</p>
                </div>
              </div>
              <div class="yard-hot-content">
                <h2 class="yard-hot-title">Sân Chảo lửa</h2>
                <p class="yard-hot-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yard-hot-item">
              <a href="yard-detail.html">
              <div class="yard-hot-image">
                <img src="{{asset ('frontend/images/f.jpg')}}" alt="" class="yard-img">
              </div>
              <div class="yard-hot-text">
                <div class="yard-hot-type">
                  <span>Sân 5 - sân 7</span>
                </div>
                <div class="yard-hot-price">
                  <p>250.000 VND/giờ</p>
                </div>
              </div>
              <div class="yard-hot-content">
                <h2 class="yard-hot-title">Sân Football Arena</h2>
                <p class="yard-hot-location">3A Phan Chu Trinh, P.12, Quận Bình Thạnh, Hồ Chí Minh</p>
              </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yard-hot-item">
              <div class="yard-hot-image">
                <img src="{{asset ('frontend/images/sportplus.png')}}" alt="" class="yard-img">
              </div>
              <div class="yard-hot-text">
                <div class="yard-hot-type">
                  <span>Sân 5 - sân 7</span>
                </div>
                <div class="yard-hot-price">
                  <p>250.000 VND/giờ</p>
                </div>
              </div>
              <div class="yard-hot-content">
                <h2 class="yard-hot-title">sân Sport Plus</h2>
                <p class="yard-hot-location">E3, Kênh 19/5, P. Sơn Kỳ, Quận Tân Phú, Hồ Chí Minh</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yard-hot-item">
              <div class="yard-hot-image">
                <img src="{{asset ('frontend/images/santhoihoa.jpg')}}" alt="" class="yard-img">
              </div>
              <div class="yard-hot-text">
                <div class="yard-hot-type">
                  <span>Sân 5 - sân 7</span>
                </div>
                <div class="yard-hot-price">
                  <p>300.000 VND/giờ</p>
                </div>
              </div>
              <div class="yard-hot-content">
                <h2 class="yard-hot-title">Sân Tân Thới Hòa</h2>
                <p class="yard-hot-location">
                  17/5 Lương Minh Nguyệt, Phường Tân Thới Hoà, Quận Tân Phú, Hồ Chí Minh</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yard-hot-item">
              <div class="yard-hot-image">
                <img src="{{asset ('frontend/images/celadon.png')}}" alt="" class="yard-img">
              </div>
              <div class="yard-hot-text">
                <div class="yard-hot-type">
                  <span>Sân 5 - sân 7</span>
                </div>
                <div class="yard-hot-price">
                  <p>250.000 VND/giờ</p>
                </div>
              </div>
              <div class="yard-hot-content">
                <h2 class="yard-hot-title">Sân Celadon City</h2>
                <p class="yard-hot-location">
                  36 Bờ Bao Tân Thắng, Phường Sơn Kỳ, Quận Tân Phú, Hồ Chí Minh</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yard-hot-item">
              <div class="yard-hot-image">
                <img src="{{asset ('frontend/images/chaolua.jpg')}}" alt="" class="yard-img">
              </div>
              <div class="yard-hot-text">
                <div class="yard-hot-type">
                  <span>Sân 5 - sân 7</span>
                </div>
                <div class="yard-hot-price">
                  <p>250.000 VND/giờ</p>
                </div>
              </div>
              <div class="yard-hot-content">
                <h2 class="yard-hot-title">Sân Chảo lửa</h2>
                <p class="yard-hot-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yard-hot-item">
              <div class="yard-hot-image">
                <img src="{{asset ('frontend/images/chaolua.jpg')}}" alt="" class="yard-img">
              </div>
              <div class="yard-hot-text">
                <div class="yard-hot-type">
                  <span>Sân 5 - sân 7</span>
                </div>
                <div class="yard-hot-price">
                  <p>250.000 VND/giờ</p>
                </div>
              </div>
              <div class="yard-hot-content">
                <h2 class="yard-hot-title">Sân Chảo lửa</h2>
                <p class="yard-hot-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="yard-hot-item">
              <div class="yard-hot-image">
                <img src="{{asset ('frontend/images/chaolua.jpg')}}" alt="" class="yard-img">
              </div>
              <div class="yard-hot-text">
                <div class="yard-hot-type">
                  <span>Sân 5 - sân 7</span>
                </div>
                <div class="yard-hot-price">
                  <p>250.000 VND/giờ</p>
                </div>
              </div>
              <div class="yard-hot-content">
                <h2 class="yard-hot-title">Sân Chảo lửa</h2>
                <p class="yard-hot-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- yard hot section end-->
      <div class="banner-small" data-aos="fade-zoom-in" data-aos-duration="500">
        <img src="{{asset ('frontend/images/banner5.jpg')}}" alt="">

      </div>
    <!-- testimonial section start -->
    <section class="testimonial" id="testimonil">
      <div class="heading" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="heading-title">Đánh giá</h1>
      </div>
      <div class="testimonial-list swiper" data-aos="fade-left" data-aos-duration="1000">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-item">
              <i class='bx bxs-quote-left'></i>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic, nisi delectus ut quis quam veniam praesentium dolorem.</p>
              <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half' ></i>
              </div>
              <img src="{{asset ('frontend/images/ronaldo.jpg')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <i class='bx bxs-quote-left'></i>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic, nisi delectus ut quis quam veniam praesentium dolorem.</p>
              <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half' ></i>
              </div>
              <img src="{{asset ('frontend/images/neymar.jpg')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <i class='bx bxs-quote-left'></i>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic, nisi delectus ut quis quam veniam praesentium dolorem.</p>
              <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half' ></i>
              </div>
              <img src="{{asset ('frontend/images/messi.jpg')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <i class='bx bxs-quote-left'></i>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic, nisi delectus ut quis quam veniam praesentium dolorem.</p>
              <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half' ></i>
              </div>
              <img src="{{asset ('frontend/images/mbappe.jpg')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <i class='bx bxs-quote-left'></i>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic, nisi delectus ut quis quam veniam praesentium dolorem.</p>
              <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half' ></i>
              </div>
              <img src="{{asset ('frontend/images/halland.jpeg')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <i class='bx bxs-quote-left'></i>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic, nisi delectus ut quis quam veniam praesentium dolorem.</p>
              <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half' ></i>
              </div>
              <img src="{{asset ('frontend/images/ozil.jpg')}}" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <i class='bx bxs-quote-left'></i>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic, nisi delectus ut quis quam veniam praesentium dolorem.</p>
              <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half' ></i>
              </div>
              <img src="{{asset ('frontend/images/verrati.jpg')}}" alt="">
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- testimonial section end -->
    <!-- blog section start -->
    <section class="blog" id="blog">
      <div class="heading" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="heading-title">tin tức<span> mới nhất</span></h1>
      </div>
      <div class="blog-list" data-aos="fade-left" data-aos-duration="1000">
        <div class="blog-item">
          <div class="blog-image">
            <img src="{{asset ('frontend/images/blog1.jpg')}}" alt="" class="blog-img">
          </div>
          <div class="blog-content">
            <span>Thứ Bảy 15/01/2022 15:55</span>
            <h2>Bruno Fernandes: Từ người hùng hóa người thừa ở Old Trafford?</h2>
            <p>Không còn hình ảnh thăng hoa bùng nổ như hai mùa giải đầu tiên trong màu áo Manchester United, Bruno Fernandes hiện tại năm nay sa sút phong độ rõ rệt</p>
          </div>
        </div>
        <div class="blog-item">
          <div class="blog-image">
            <img src="{{asset ('frontend/images/blog2.jpg')}}" alt="" class="blog-img">
          </div>
          <div class="blog-content">
            <span>Thứ Bảy 15/01/2022 10:15</span>
            <h2>Man City vs Chelsea (19h30 ngày 15/1): Tất cả kỳ vọng vào The Blues</h2>
            <p>Ngoài NHM Chelsea thì những CĐV trung lập đều đứng về phía The Blues ở trận đấu với Man City, qua đó chờ đợi cuộc đua vô địch hấp dẫn hơn trong phần còn lại của mùa giải.</p>
          </div>
        </div>
        <div class="blog-item">
          <div class="blog-image">
            <img src="{{asset ('frontend/images/blog3.jpg')}}" alt="" class="blog-img">
          </div>
          <div class="blog-content">
            <span>Thứ Bảy 15/01/2022 15:55</span>
            <h2>Nếu Rüdiger cứ đá thế này, Chelsea sẽ phải xuống nước</h2>
            <p>Có một câu chuyện đang xảy ra đều đặn như việc rửa mặt hàng ngày: Chelsea chơi tốt một trận, để rồi sau đó người hâm mộ lại cầu xin CLB trao cho Antonio Rüdiger một bản hợp đồng mới.</p>
          </div>
        </div>
      </div>
      <a href="" class="btn">xem thêm</a>
    </section>
    <!-- blog section end -->
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
